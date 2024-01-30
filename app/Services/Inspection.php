<?php

namespace App\Services;

use App\Http\Resources\GradeResource;
use App\Repositories\Inspection as InspectionRepository;

class Inspection extends Base
{
    public function __construct(InspectionRepository $repository, private \App\Repositories\Grade $gradeRepository)
    {
        parent::__construct($repository);
    }

    /**
     * Get grade
     *
     * @param int $inspectionID
     * @param int $gradeID
     * @return GradeResource
     */
    public function getGrade(int $inspectionID, int $gradeID): GradeResource
    {
        $grade = $this->gradeRepository->all(filters: [
            'id' => $gradeID,
            'inspection_id' => $inspectionID
        ]);

        return new GradeResource($grade);
    }
}
