<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OpportunityDetail extends JsonResource
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
            'benefits' => $this->benefits,
            'applicationProcess' => $this->applicaition_process,
            'furtherQueries' => $this->father_qureies,
            'eligibilities' => $this->eligibities,
            'startDate' => $this->start_date->toDayDateTimeString(),
            // 'endDate' => $this->end_date->toDayDateTimeString(),
            'officialLink' => $this->official_link,
            'eligibleRegions' => $this->eligible_regions
        ];
    }
}
