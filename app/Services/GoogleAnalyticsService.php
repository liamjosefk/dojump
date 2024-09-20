<?php

namespace App\Services;

use DateTime;
use Google\Analytics\Data\V1beta\Dimension;
use Google\Analytics\Data\V1beta\BetaAnalyticsDataClient;
use Google\Analytics\Data\V1beta\DateRange;
use Google\Analytics\Data\V1beta\Metric;
use Google\Analytics\Data\V1beta\FilterExpression;
use Google\Analytics\Data\V1beta\Filter;
use Google\Analytics\Data\V1beta\Filter\StringFilter;

class GoogleAnalyticsService
{
    protected $client;

    public function __construct()
    {
        $this->client = new BetaAnalyticsDataClient([
            'credentials' => config('app.google_analytics_credentials'),
        ]);
    }

    public function getUsersFromLast7Days()
    {
        $response = $this->client->runReport([
            'property' => 'properties/' . config('app.ga4_property_id'),
            'dateRanges' => [
                new DateRange(['start_date' => '7daysAgo', 'end_date' => 'today']),
            ],
            'metrics' => [
                new Metric(['name' => 'activeUsers']),
            ],
        ]);

        $usersLast7Days = 0;
        foreach ($response->getRows() as $row) {
            $usersLast7Days += $row->getMetricValues()[0]->getValue();
        }

        return $usersLast7Days;
    }

    public function getActiveUsersFromLast14Days()
    {
        $response = $this->client->runReport([
            'property' => 'properties/' . config('app.ga4_property_id'),
            'dateRanges' => [
                new DateRange(['start_date' => '14daysAgo', 'end_date' => 'today']), // 14 days range
            ],
            'metrics' => [
                new Metric(['name' => 'activeUsers']),
            ],
            'dimensions' => [
                new Dimension(['name' => 'date']), // Break down by date
            ],
        ]);

        $activeUsers = [];
        foreach ($response->getRows() as $row) {
            $rawDate = $row->getDimensionValues()[0]->getValue();
            $activeUserCount = $row->getMetricValues()[0]->getValue();

            $formattedDate = \DateTime::createFromFormat('Ymd', $rawDate)->format('M d');
            $activeUsers[] = $activeUserCount; // Store each day's active users
        }

        return $activeUsers;
    }


    public function getEventCountsLast7Days()
    {
        $response = $this->client->runReport([
            'property' => 'properties/' . config('app.ga4_property_id'),
            'dateRanges' => [
                new DateRange(['start_date' => '7daysAgo', 'end_date' => 'today']),
            ],
            'metrics' => [
                new Metric(['name' => 'eventCount']),
            ],
            'dimensions' => [
                new Dimension(['name' => 'date']), // Fetch breakdown by date
            ],
        ]);

        $eventCounts = [];
        $labels = []; // For date labels
        foreach ($response->getRows() as $row) {
            $rawDate = $row->getDimensionValues()[0]->getValue(); // e.g., 20240913
            $eventCount = $row->getMetricValues()[0]->getValue();

            // Convert the date format from YYYYMMDD to a more readable format like 'Sep 13'
            $formattedDate = \DateTime::createFromFormat('Ymd', $rawDate)->format('M d');

            $eventCounts[] = $eventCount; // Use indexed array to match labels order
            $labels[] = $formattedDate;   // Push formatted date into labels array
        }

        return [
            'eventCounts' => $eventCounts,
            'labels' => $labels
        ];
    }

    public function getEventCountsLast14Days()
    {
        $response = $this->client->runReport([
            'property' => 'properties/' . config('app.ga4_property_id'),
            'dateRanges' => [
                new DateRange(['start_date' => '14daysAgo', 'end_date' => 'today']), // Change to 14 days
            ],
            'metrics' => [
                new Metric(['name' => 'eventCount']),
            ],
            'dimensions' => [
                new Dimension(['name' => 'date']), // Fetch breakdown by date
            ],
        ]);

        $eventCounts = [];
        $labels = []; // For date labels
        foreach ($response->getRows() as $row) {
            $rawDate = $row->getDimensionValues()[0]->getValue(); // e.g., 20240913
            $eventCount = $row->getMetricValues()[0]->getValue();

            // Convert the date format from YYYYMMDD to a more readable format like 'Sep 13'
            $formattedDate = \DateTime::createFromFormat('Ymd', $rawDate)->format('M d');

            $eventCounts[] = $eventCount; // Use indexed array to match labels order
            $labels[] = $formattedDate;   // Push formatted date into labels array
        }

        return [
            'eventCounts' => $eventCounts,
            'labels' => $labels
        ];
    }






    public function getRealtimeActiveUsers()
    {
        $response = $this->client->runRealtimeReport([
            'property' => 'properties/' . config('app.ga4_property_id'),
            'metrics' => [
                new Metric(['name' => 'activeUsers']),
            ],
        ]);

        $activeUsers = 0;
        foreach ($response->getRows() as $row) {
            $activeUsers += $row->getMetricValues()[0]->getValue();
        }

        return $activeUsers;
    }

    public function getEventCount()
    {
        $response = $this->client->runReport([
            'property' => 'properties/' . config('app.ga4_property_id'),
            'dateRanges' => [
                new DateRange(['start_date' => '7daysAgo', 'end_date' => 'today']),
            ],
            'metrics' => [
                new Metric(['name' => 'eventCount']),
            ],
        ]);

        $eventCount = 0;
        foreach ($response->getRows() as $row) {
            $eventCount += $row->getMetricValues()[0]->getValue();
        }

        return $eventCount;
    }

    public function getViewsByPageTitle()
    {
        $response = $this->client->runReport([
            'property' => 'properties/' . config('app.ga4_property_id'),
            'dateRanges' => [
                new DateRange(['start_date' => '7daysAgo', 'end_date' => 'today']),
            ],
            'metrics' => [
                new Metric(['name' => 'screenPageViews']),
            ],
            'dimensions' => [
                new Dimension(['name' => 'pageTitle']),
            ],
        ]);

        $pageViews = [];
        foreach ($response->getRows() as $row) {
            $pageViews[] = [
                'title' => $row->getDimensionValues()[0]->getValue(),
                'views' => $row->getMetricValues()[0]->getValue(),
            ];
        }

        return $pageViews;
    }

    public function getSessionsBySource()
    {
        // Create a filter to exclude 'liamjosef.com' as a session source
        $filterExpression = new FilterExpression([
            'not_expression' => new FilterExpression([
                'filter' => new Filter([
                    'field_name' => 'sessionSource',
                    'string_filter' => new StringFilter([
                        'match_type' => StringFilter\MatchType::EXACT,
                        'value' => 'liamjosef.com'
                    ])
                ])
            ])
        ]);

        // Run the report with the filter expression
        $response = $this->client->runReport([
            'property' => 'properties/' . config('app.ga4_property_id'),
            'dateRanges' => [
                new DateRange(['start_date' => '7daysAgo', 'end_date' => 'today']),
            ],
            'metrics' => [
                new Metric(['name' => 'sessions']),
            ],
            'dimensions' => [
                new Dimension(['name' => 'sessionSource']),
            ],
            'dimensionFilter' => $filterExpression, // Apply the filter expression
        ]);

        // Process the report data
        $sessionsBySource = [];
        foreach ($response->getRows() as $row) {
            $source = $row->getDimensionValues()[0]->getValue();
            $sessions = $row->getMetricValues()[0]->getValue();

            $sessionsBySource[] = [
                'source' => $source,
                'sessions' => $sessions
            ];
        }

        return $sessionsBySource;
    }








}
