<?php

namespace Nnjeim\World\Http\Requests\Country;

use Nnjeim\World\Http\Requests\BaseRequest;

class IndexRequest extends BaseRequest
{
	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'fields' => 'sometimes',
            'filters' => 'sometimes',
		];
	}
}
