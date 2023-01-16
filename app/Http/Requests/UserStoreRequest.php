<?php
declare(strict_types=1);
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'firstname' => ['required', 'string', 'max:50'],
            'lastname' => ['required', 'string', 'max:50'],
            'phonenumber' => ['required', 'numeric'],
            'birthdate' => ['required', 'date'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ];
    }
}
