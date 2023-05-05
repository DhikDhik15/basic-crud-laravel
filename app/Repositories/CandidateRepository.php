<?php

namespace App\Repositories;

use App\Models\Candidates;

class CandidateRepository
{
    public function store($data)
    {
        $original_name = $data['resume']->getClientOriginalName();
        $destination = 'storage';
        $data['resume']->move(public_path($destination), $original_name);//move file in folder storage

        $candidate = [
            'name' => $data['name'],
            'education' => $data['education'],
            'birthday' => $data['birthday'],
            'experience' => $data['experience'],
            'last_position' => $data['last_position'],
            'applied_position' => $data['applied_position'],
            'top_skills' => $data['top_5'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'resume' => $original_name
        ];

        $store = Candidates::create($candidate);

        return $store;
    }

    public function getAll()
    {
        return $model = Candidates::orderBy('id', 'DESC')->get();
    }

    public function getById($id)
    {
        return $model = Candidates::find($id);
    }

    public function update(array $data)
    {
        $id = $data['id'];
        $find = $this->getById($id);
        $candidate = [
            'name' => $data['name'],
            'education' => $data['education'],
            'birthday' => $data['birthday'],
            'experience' => $data['experience'],
            'last_position' => $data['last_position'],
            'applied_position' => $data['applied_position'],
            'top_skills' => $data['top_5'],
            'email' => $data['email'],
            'phone' => $data['phone'],
        ];

        return $find->update($candidate);
    }

    public function destroy($id)
    {
        $find = $this->getById($id);
        return $find->delete();
    }
}
