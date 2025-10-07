<?php

namespace Database\Factories\MasterData;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\MasterData\PPDB;
use Illuminate\Support\Str;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MasterData\PPDB>
 */
class PPDBFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = PPDB::class;

    public function definition(): array
    {
        $jenisPendaftaran = ['Peserta Didik Baru', 'Mutasi'];
        $jenjang = ['TK', 'SD', 'SMP', 'SMA'];
        $jenisKelamin = ['L', 'P'];

        // Generate tanggal lahir sesuai jenjang
        $birthDate = match ($this->faker->randomElement($jenjang)) {
            'TK' => $this->faker->dateTimeBetween('-6 years', '-4 years'),
            'SD' => $this->faker->dateTimeBetween('-12 years', '-6 years'),
            'SMP' => $this->faker->dateTimeBetween('-15 years', '-12 years'),
            'SMA' => $this->faker->dateTimeBetween('-18 years', '-15 years'),
        };

        return [
            'jenis_pendaftaran' => $this->faker->randomElement($jenisPendaftaran),
            'jenjang' => $this->faker->randomElement($jenjang),
            'nama_lengkap' => $this->faker->name(),
            'jenis_kelamin' => $this->faker->randomElement($jenisKelamin),
            'tempat_lahir' => $this->faker->city(),
            'tanggal_lahir' => Carbon::instance($birthDate)->format('Y-m-d'),
            'no_telp' => $this->faker->optional()->phoneNumber(),
            'no_hp' => $this->faker->optional()->phoneNumber(),
            'no_hp2' => $this->faker->optional()->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
