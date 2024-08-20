namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DietaryProfile extends Model
{
    use HasFactory;

    protected $fillable = ['patient_id', 'dietician_id', 'schedule'];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function dietician()
    {
        return $this->belongsTo(Dietician::class);
    }
}
