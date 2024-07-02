<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiants extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nom_elev',
        'Prenom_eleve',
        'Cycle',
        'IM',
        'Annee_scolaire',
        'Date_naissance',
        'Lieu_naissances',
        'Nom_parents',
        'profession_parents',
        'Nom_mere',
        'profession_mere',
        'Nom_tuteur',
        'profession_tuteurs',
        'Adresse_parents',
        'Etat_actuel',
        'Etat_class',
        'code_Nom_ecol',
         
        //notes
        'Mal_MJ1',
        'Frs_MJ1',
        'Ang_MJ1',
        'HG_MJ1',
        'EC_MJ1',
        'Mths_MJ1',
        'PC_MJ1',
        'SVT_MJ1',
        'EPS_MJ1',

        'Mal_EX1',
        'Frs_EX1',
        'Ang_EX1',
        'HG_EX1',
        'EC_EX1',
        'Mths_EX1',
        'PC_EX1',
        'SVT_EX1',
        'EPS_EX1',

        'Mal_MG1',
        'Frs_MG1',
        'Ang_MG1',
        'HG_MG1',
        'EC_MG1',
        'Mths_MG1',
        'PC_MG1',
        'SVT_MG1',
        'EPS_MG1',

        'Mal_MJ2',
        'Frs_MJ2',
        'Ang_MJ2',
        'HG_MJ2',
        'EC_MJ2',
        'Mths_MJ2',
        'PC_MJ2',
        'SVT_MJ2',
        'EPS_MJ2',

        'Mal_EX2',
        'Frs_EX2',
        'Ang_EX2',
        'HG_EX2',
        'EC_EX2',
        'Mths_EX2',
        'PC_EX2',
        'SVT_EX2',
        'EPS_EX2',

        'Mal_MG2',
        'Frs_MG2',
        'Ang_MG2',
        'HG_MG2',
        'EC_MG2',
        'Mths_MG2',
        'PC_MG2',
        'SVT_MG2',
        'EPS_MG2',

        'Mal_MJ3',
        'Frs_MJ3',
        'Ang_MJ3',
        'HG_MJ3',
        'EC_MJ3',
        'Mths_MJ3',
        'PC_MJ3',
        'SVT_MJ3',
        'EPS_MJ3',
        
        'Mal_EX3',
        'Frs_EX3',
        'Ang_EX3',
        'HG_EX3',
        'EC_EX3',
        'Mths_EX3',
        'PC_EX3',
        'SVT_EX3',
    ];

}