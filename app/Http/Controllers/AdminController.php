<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\GoogleAnalyticsService;

class AdminController extends Controller
{
    protected $analyticsService;

    public function __construct(GoogleAnalyticsService $analyticsService)
    {
        $this->analyticsService = $analyticsService;
    }

    public function index()
    {
        $activeUsers = $this->analyticsService->getRealtimeActiveUsers();
        $eventCount = $this->analyticsService->getEventCount();
        $pageViews = $this->analyticsService->getViewsByPageTitle();
        $sessionsBySource = $this->analyticsService->getSessionsBySource();

        $usersLast7Days = $this->analyticsService->getUsersFromLast7Days();
        $usersLast14Days = $this->analyticsService->getActiveUsersFromLast14Days(); // Get the active users data for 14 days
        $eventsLast7DaysData = $this->analyticsService->getEventCountsLast7Days();
        $eventsLast14DaysData = $this->analyticsService->getEventCountsLast14Days();

        // Separate the event counts and labels for 14 days
        $eventCountsLast14Days = $eventsLast14DaysData['eventCounts']; // Extract event counts
        $labelsLast14Days = $eventsLast14DaysData['labels']; // Extract date labels for 14 days

        return view('admin.index', compact(
            'activeUsers',
            'usersLast7Days',
            'usersLast14Days', // Correct 14 days of active users
            'eventCountsLast14Days', // Event counts over 14 days
            'eventsLast7DaysData', // 7-day event counts
            'eventCount',
            'pageViews',
            'sessionsBySource',
            'labelsLast14Days' // Correct labels for 14 days
        ));
    }




}
