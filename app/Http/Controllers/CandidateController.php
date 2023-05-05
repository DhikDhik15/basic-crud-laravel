<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CandidateRequest;
use App\Repositories\CandidateRepository;
use App\Http\Requests\CandidateUpdateRequest;

class CandidateController extends Controller
{
    protected $candidate;

    public function __construct(
        CandidateRepository $candidate
    )
    {
        $this->candidate = $candidate;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('candidate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CandidateRequest $request)
    {
        try {
            $data = $request->data();
            $data_candidate = $this->candidate->store($data);
            return redirect()->route('home.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->candidate->getById($id);
        return view('candidate.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CandidateUpdateRequest $request)
    {
        try {
            $data = $request->data();
            $update = $this->candidate->update($data);
            return redirect()->route('home.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $data = $this->candidate->destroy($id);
            return redirect()->route('home.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function getCandidate()
    {
        try {
            $data = $this->candidate->getAll();
            return response([
                'status' => 200,
                'candidate' => $data
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function postCandidate(CandidateRequest $request)
    {
        try {
            $data = $request->data();
            $data_candidate = $this->candidate->store($data);
            return response([
                'status' => 200,
                'message' => $data_candidate
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function updateCandidate(CandidateUpdateRequest $request)
    {
        try {
            $data = $request->data();
            $update = $this->candidate->update($data);
            return response([
                'status' => 200,
                'message' => 'success'
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function deleteCandidate($id)
    {
        try {
            $data = $this->candidate->destroy($id);
            return response([
                'status' => 200,
                'message' => 'success'
            ]);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
