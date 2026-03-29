<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;
use App\Models\User;
use App\Models\Category;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalComplaints = Complaint::count();
        $needVerification = Complaint::where('status', 'Pending')->count();
        $resolvedCases = Complaint::where('status', 'Resolved')->count();
        $activeStaff = User::whereIn('role', ['admin', 'staff'])->count();

        $complaints = Complaint::with(['user', 'category'])
            ->latest()
            ->paginate(10);

        return view('admin.admin-dashboard', compact(
            'totalComplaints', 
            'needVerification', 
            'resolvedCases', 
            'activeStaff', 
            'complaints'
        ));
    }

    public function students(Request $request)
    {
        $students = User::where('role', 'student')->latest('user_id')->paginate(10);
        return view('admin.student-management', compact('students'));
    }

    public function categories(Request $request)
    {
        $categories = Category::withCount('complaints')->paginate(10);
        return view('admin.category-management', compact('categories'));
    }

    public function aspirations(Request $request)
    {
        $aspirations = Complaint::with(['user', 'category'])->latest('complaint_id')->paginate(10);
        return view('admin.aspiration-management', compact('aspirations'));
    }
}
