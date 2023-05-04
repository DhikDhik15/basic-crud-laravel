<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\CandidateRepository;

class HomeController extends Controller
{
    protected $candidate;

    public function __construct(
        CandidateRepository $candidate
    )
    {
        $this->candidate = $candidate;
    }

    public function index()
    {
        $data = $this->candidate->getAll();
        $candidates = [];
        foreach($data as $candidate) {
            $candidates[]=[
                'id' => $candidate->id,
                'name' => $candidate->name,
                'education' => $candidate->education,
                'birthday' => $candidate->birthday,
                'experience' => $candidate->experience,
                'last_position' => $candidate->last_position,
                'applied_position' => $candidate->applied_position,
                'top_skills' => $candidate->top_skills,
                'email' => $candidate->email,
                'phone' => $candidate->phone,
            ];
        }

        $user = Auth::user();
        return view('home.index', compact('candidates', 'user'));
    }
}
