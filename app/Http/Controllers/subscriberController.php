<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use App\Models\Subscriber;

class subscriberController extends Controller
{
    public function addSubscriber(Request $request)
    {
        $request->validate([
            'email' => [
                'required',
                'email',
                Rule::unique('subscriber', 'email'),
            ],
        ]);

        Subscriber::create([
            'email' => $request->input('email'),
        ]);

        return back()->with('success', 'Vous avez été abonné avec succès.');
    }

    public function unsubscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $email = $request->input('email');

        $subscriber = Subscriber::where('email', $email)->first();

        if (!$subscriber)
        {
            return back()->with('error','Email non existant');
        }

        $subscriber->delete();

        return back()->with('success', 'Vous avez été désabonné avec succès.');
    }

    public function showDashboard()
    {
        return view('dashboard');
    }

    public function showSubscriberStatistics()
    {
        $subscriberStatistics = Subscriber::select(
            DB::raw('DATE(created_at) as date'),
            DB::raw('COUNT(*) as subscriber_count')
        )
            ->groupBy('date')
            ->get();

        // Nombre total d'abonnés
//        $totalSubscribers = Subscriber::count();

        return view('dashboard', [
            'subscriberStatistics' => $subscriberStatistics,
//            'totalSubscribers' => $totalSubscribers
        ]);
    }
}


