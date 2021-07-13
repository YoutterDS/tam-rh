<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Rinvex\Subscriptions\Models\PlanFeature;

class PlansSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DEMO
        $planDemo = app('rinvex.subscriptions.plan')->create([
            'name' => 'DEMO',
            'description' => 'Plan DEMO',
            'price' => 0.00,
            'signup_fee' => 0.00,
            'invoice_period' => 1,
            'invoice_interval' => 'month',
            'trial_period' => 15,
            'trial_interval' => 'day',
            'sort_order' => 1,
            'currency' => 'EUR',
        ]);

        $planDemo->features()->saveMany([
            new PlanFeature(['name' => 'office', 'value' => 1, 'sort_order' => 1]),
            new PlanFeature(['name' => 'settings', 'value' => 'Y', 'sort_order' => 2]),
            new PlanFeature(['name' => 'employees', 'value' => 10, 'sort_order' => 3]), // , 'resettable_period' => 1, 'resettable_interval' => 'month'
            new PlanFeature(['name' => 'timetable', 'value' => 'Y', 'sort_order' => 4]),
            new PlanFeature(['name' => 'documents-lists-only-predefined', 'value' => 'Y', 'sort_order' => 5]),
            new PlanFeature(['name' => 'notifications', 'value' => 'N', 'sort_order' => 6]),
            new PlanFeature(['name' => 'calendar', 'value' => 'N', 'sort_order' => 7]),
            new PlanFeature(['name' => 'disc-space', 'value' => 3000, 'sort_order' => 8]), // 3Gb
            new PlanFeature(['name' => 'support', 'value' => 'N', 'sort_order' => 9])
        ]);

        // BASIC
        $planBasic = app('rinvex.subscriptions.plan')->create([
            'name' => 'BASIC', // ['es'=>'BASIC', 'ca'=>'BASIC','en'=>'BASIC','fr'=>'BASIC']
            'description' => 'Plan BASIC',
            'price' => 3.99,
            'signup_fee' => 1.99,
            'invoice_period' => 1,
            'invoice_interval' => 'month',
            'trial_period' => 15,
            'trial_interval' => 'day',
            'sort_order' => 1,
            'currency' => 'EUR',
        ]);

        $planBasic->features()->saveMany([
            new PlanFeature(['name' => 'office', 'value' => 1, 'sort_order' => 1]),
            new PlanFeature(['name' => 'settings', 'value' => 'Y', 'sort_order' => 2]),
            new PlanFeature(['name' => 'employees', 'value' => 10, 'sort_order' => 3]), // , 'resettable_period' => 1, 'resettable_interval' => 'month'
            new PlanFeature(['name' => 'timetable', 'value' => 'Y', 'sort_order' => 4]),
            new PlanFeature(['name' => 'documents-lists-only-predefined', 'value' => 'Y', 'sort_order' => 5]),
            new PlanFeature(['name' => 'notifications', 'value' => 'N', 'sort_order' => 6]),
            new PlanFeature(['name' => 'calendar', 'value' => 'N', 'sort_order' => 7]),
            new PlanFeature(['name' => 'disc-space', 'value' => 3000, 'sort_order' => 8]), // 3Gb
            new PlanFeature(['name' => 'support', 'value' => 'N', 'sort_order' => 9])
        ]);

        // BUSINESS
        $planBusiness = app('rinvex.subscriptions.plan')->create([
            'name' => 'BUSINESS',
            'description' => 'Plan BUSINESS',
            'price' => 6.99,
            'signup_fee' => 1.99,
            'invoice_period' => 1,
            'invoice_interval' => 'month',
            'trial_period' => 15,
            'trial_interval' => 'day',
            'sort_order' => 1,
            'currency' => 'EUR',
        ]);

        $planBusiness->features()->saveMany([
            new PlanFeature(['name' => 'office', 'value' => 'Y', 'sort_order' => 1]),
            new PlanFeature(['name' => 'settings', 'value' => 'Y', 'sort_order' => 2]),
            new PlanFeature(['name' => 'employees', 'value' => 20, 'sort_order' => 3]),
            new PlanFeature(['name' => 'timetable', 'value' => 'Y', 'sort_order' => 4]),
            new PlanFeature(['name' => 'documents-lists', 'value' => 'Y', 'sort_order' => 5]),
            new PlanFeature(['name' => 'notifications', 'value' => 'N', 'sort_order' => 6]),
            new PlanFeature(['name' => 'calendar', 'value' => 'Y', 'sort_order' => 7]),
            new PlanFeature(['name' => 'disc-space', 'value' => 10000, 'sort_order' => 8]), // 10Gb
            new PlanFeature(['name' => 'support', 'value' => 'N', 'sort_order' => 9])
        ]);

        // EXCELLENCE
        $planExcellence = app('rinvex.subscriptions.plan')->create([
            'name' => 'EXCELLENCE',
            'description' => 'Plan EXCELLENCE',
            'price' => 9.99,
            'signup_fee' => 1.99,
            'invoice_period' => 1,
            'invoice_interval' => 'month',
            'trial_period' => 15,
            'trial_interval' => 'day',
            'sort_order' => 1,
            'currency' => 'EUR',
        ]);

        $planExcellence->features()->saveMany([
            new PlanFeature(['name' => 'office', 'value' => 'Y', 'sort_order' => 1]),
            new PlanFeature(['name' => 'settings', 'value' => 'Y', 'sort_order' => 2]),
            new PlanFeature(['name' => 'employees', 'value' =>  40, 'sort_order' => 3]),
            new PlanFeature(['name' => 'timetable', 'value' => 'Y', 'sort_order' => 4]),
            new PlanFeature(['name' => 'documents-lists', 'value' => 'Y', 'sort_order' => 5]),
            new PlanFeature(['name' => 'notifications', 'value' => 'Y', 'sort_order' => 6]),
            new PlanFeature(['name' => 'calendar', 'value' => 'Y', 'sort_order' => 7]),
            new PlanFeature(['name' => 'disc-space', 'value' => 50000, 'sort_order' => 8]), // 50Gb
            new PlanFeature(['name' => 'support', 'value' => 'N', 'sort_order' => 9])
        ]);

        // PREMIUM
        $planPremium = app('rinvex.subscriptions.plan')->create([
            'name' => 'PREMIUM',
            'description' => 'Plan PREMIUM',
            'price' => 24.99,
            'signup_fee' => 1.99,
            'invoice_period' => 1,
            'invoice_interval' => 'month',
            'trial_period' => 15,
            'trial_interval' => 'day',
            'sort_order' => 1,
            'currency' => 'EUR',
        ]);

        $planPremium->features()->saveMany([
            new PlanFeature(['name' => 'office', 'value' => 'Y', 'sort_order' => 1]),
            new PlanFeature(['name' => 'settings', 'value' => 'Y', 'sort_order' => 2]),
            new PlanFeature(['name' => 'employees', 'value' =>  100, 'sort_order' => 3]),
            new PlanFeature(['name' => 'timetable', 'value' => 'Y', 'sort_order' => 4]),
            new PlanFeature(['name' => 'documents-lists', 'value' => 'Y', 'sort_order' => 5]),
            new PlanFeature(['name' => 'notifications', 'value' => 'Y', 'sort_order' => 6]),
            new PlanFeature(['name' => 'calendar', 'value' => 'Y', 'sort_order' => 7]),
            new PlanFeature(['name' => 'disc-space', 'value' => 50000, 'sort_order' => 8]), // 50Gb
            new PlanFeature(['name' => 'support', 'value' => 'Y', 'sort_order' => 9])
        ]);
    }
}
