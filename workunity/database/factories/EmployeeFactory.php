<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'nom'=> $this->faker->LastName(),
           'prenom' => $this->faker->firstName(),
            'email' => $this->faker->unique()->safeEmail(),
            'telephone' => $this->faker->phoneNumber(),
            'departement' => $this->faker->randomElement([
                'developpement', 
                'marketing', 
                'rh', 
                'ventes', 
                'support'
            ]),
            'poste' => $this->faker->jobTitle(),
            'date_embauche' => $this->faker->dateTimeBetween('-5 years', 'now'),
            'salaire' => $this->faker->numberBetween(25000, 80000),
            'adresse' => $this->faker->address(),
        ];
    }
}
