<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class livreur extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id_livreur' => $this->id_livreur,
            'nom' => $this->nom,
            'prénom' => $this->prénom,
            'mail' => $this->mail,
            'num' => $this->num,
            'nb_ajout' => $this->nb_ajout,
            'id_zone' => $this->id_zone,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
