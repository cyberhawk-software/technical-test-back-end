<?php

namespace App\Services;

use App\Http\Resources\GradeResource;
use App\Repositories\Component as ComponentRepository;

class Component extends Base
{
    public function __construct(ComponentRepository $repository, private \App\Repositories\Grade $gradeRepository)
    {
        parent::__construct($repository);
    }

    /**
     * Get grade
     *
     * @param int $componentID
     * @param int $gradeID
     * @return GradeResource
     */
    public function getGrade(int $componentID, int $gradeID): GradeResource
    {
        $grade = $this->gradeRepository->all(filters: [
            'id' => $gradeID,
            'component_id' => $componentID
        ]);

        return new GradeResource($grade);
    }
}