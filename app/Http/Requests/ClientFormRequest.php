<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientFormRequest extends FormRequest
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
      'people_number' => ['required', 'integer'],
      'check_in' => ['required', 'date'],
      'check_out' => ['required', 'date'],
      'room_type' => ['required', 'bool'],
      'cost' => ['required', 'integer'],
      'voucher' => 'required',
    ];
  }

  protected function prepareForValidation()
  {
    $this->merge([
      'name' => strip_tags($this->name),
      'people_number' => strip_tags($this->people_number),
      'check_in' => strip_tags($this->check_in),
      'check_out' => strip_tags($this->check_out),
      'room_type' => strip_tags($this->room_type),
      'cost' => strip_tags($this->cost),
      'voucher' => strip_tags($this->voucher),
    ]);
  }
}
