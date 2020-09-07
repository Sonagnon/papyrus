<?php

namespace App\Repositories;

use App\Document;

class DocumentRepository extends ResourceRepository
{

    public function __construct(Document $document)
	{
		$this->model = $document;
	}

}