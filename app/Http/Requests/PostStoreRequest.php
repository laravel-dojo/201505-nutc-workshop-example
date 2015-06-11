<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class PostStoreRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'title' => 'required|min:3|max:500',
			'sub_title' => 'required|min:3|max:255',
			'content' => 'required',
			'is_hot' => 'required|boolean',
		];
	}

}
