<?php

namespace App\Repositories;

use App\Annotation;

class AnnotationRepository extends ResourceRepository
{

    public function __construct(Annotation $annotation)
	{
		$this->model = $annotation;
	}

}