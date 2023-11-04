<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErlianController extends Controller
{
    private $movieData = [
        [
            'id' => 'tt1746090',
            'judul' => 'Equalizer 3',
            'sinopsis' => 'Robert McCall finds himself at home in Southern Italy but he discovers his friends are under the control of local crime bosses. As events turn deadly, McCall knows what he has to do: become his friends protector by taking on the mafia.',
            'tahun' => 2023,
            'pemain' => ['Denzel Washington', 'Dakota Fanning', 'Eugenio Mastrandrea'],
            'foto_sampul' => 'equalizer.jpg',
        ],
        [
            'id' => 'tt2567856',
            'judul' => 'Mission: Impossible - Dead Reckoning Part One',
            'sinopsis' => 'Ethan Hunt and his IMF team must track down a dangerous weapon before it falls into the wrong hands.',
            'tahun' => 2023,
            'pemain' => ['Tom Cruise', 'Hayley Atwell', 'Ving Rhames'],
            'foto_sampul' => 'mission-imposible.jpg',
        ],
        [
            'id' => 'tt1745564',
            'judul' => 'Openheimer',
            'sinopsis' => 'The story of American scientist, J. Robert Oppenheimer, and his role in the development of the atomic bomb.',
            'tahun' => 2023,
            'pemain' => ['Cillian Murphy', 'Emily Blunt', 'Robert Downey Jr.'],
            'foto_sampul' => 'openheimer.jpg',
        ],
        [
            'id' => 'tt1745960',
            'judul' => 'Top Gun: Maverick',
            'sinopsis' => 'After thirty years, Maverick is still pushing the envelope as a top naval aviator, but must confront ghosts of his past when he leads TOP GUNs elite graduates on a mission that demands the ultimate sacrifice from those chosen to fly it.',
            'tahun' => 2022,
            'pemain' => ['Tom Cruise', 'Jennifer Connelly', 'Miles Teller'],
            'foto_sampul' => 'top-gun.jpg',
        ],
        [
            'id' => 'tt1745961',
            'judul' => 'X',
            'sinopsis' => 'In 1979, a group of young filmmakers set out to make an adult film in rural Texas, but when their reclusive, elderly hosts catch them in the act, the cast find themselves fighting for their lives.',
            'tahun' => 2022,
            'pemain' => ['Mia Goth, Jenna Ortega, Brittany Snow'],
            'foto_sampul' => 'X.jpg',
        ],
        [
            'id' => 'tt1745962',
            'judul' => 'The Marvel',
            'sinopsis' => 'Carol Danvers gets her powers entangled with those of Kamala Khan and Monica Rambeau, forcing them to work together to save the universe.',
            'tahun' => 2023,
            'pemain' => ['Brie Larson', 'Teyonah Parris', 'Iman Vellani'],
            'foto_sampul' => 'the-marvel.jpg',
        ],
    ];

    public function movieData()
    {
        return view('movieData', ['movieData' => $this->movieData]);
    }

    public function detail($id)
    {
        // Temukan film dengan ID yang sesuai dalam array $movieData
        $film = null;
        foreach ($this->movieData as $movie) {
            if ($movie['id'] === $id) {
                $film = $movie;
                break;
            }
        }

        // Jika film ditemukan, kirim data film ke halaman detail
        if ($film) {
            return view('detail', compact('film'));
        } else {
            // Handle jika film tidak ditemukan, misalnya, tampilkan pesan atau redirect ke halaman lain
            return redirect()->route('homepage')->with('error', 'Film tidak ditemukan.');
        }
    }
}
