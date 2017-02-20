<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 * App\Rooms
 * @property int $id
 * @property string $diagnosis_abbreviation
 * @property int $diagnosis_type_id
 * @property int $gender_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static whereCreatedAt($value)
 * @method static whereDiagnosisAbbreviation($value)
 * @method static whereDiagnosisTypeId($value)
 * @method static whereGenderId($value)
 * @method static whereId($value)
 * @method static whereUpdatedAt($value)
 */
class InpatientDiagnosis extends Model {
// Select Field #3 Data Model Class: Inpatient Diagnosis
    protected $table='inpatient_diagnosis';
}
