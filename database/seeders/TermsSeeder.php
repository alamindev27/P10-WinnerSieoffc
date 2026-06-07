<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TermsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('terms')->insert([
            [
                'one' => 'প্রথমে উপরের "Get Free Code" বাটনে ক্লিক করুন।',
                'two' => 'যদি আপনি সঠিকভাবে প্রোমোকোড ব্যবহার করে একাউন্ট রেজিস্ট্রেশন করুন।',
                'three' => 'কোডটি কপি করুন এবং আমাদের ওয়েবসাইটে লগইন করে মাল্টি অ্যাক্সেস পেতে কোডটি ব্যবহার করুন।',
                'four' => 'যদি আপনি সঠিকভাবে প্রোমোকোড ব্যবহার না করে থাকেন।',
                'created_at' => Carbon::now()
            ]
        ]);
    }
}
