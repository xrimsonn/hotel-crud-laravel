<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaffFormRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   */
  public function authorize(): bool
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
   */
  public function rules(): array
  {
    return [
      'name' => 'required',
      'surname' => 'required',
      'position' => 'required',
      'address' => 'required',
      'phone' => 'required',
    ];
  }

  protected function prepareForValidation()
  {
    $this->merge([
      'name' => strip_tags($this->name),
      'surname' => strip_tags($this->surname),
      'position' => strip_tags($this->position),
      'address' => strip_tags($this->address),
      'phone' => strip_tags($this->phone),
    ]);
  }
}
