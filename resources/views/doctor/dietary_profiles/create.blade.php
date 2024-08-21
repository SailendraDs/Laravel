@extends('layouts.dash')

@section('content')
<div class="container">
    <h2>Create Dietary Profile for {{ $patient->name }}</h2>
    <form method="POST" action="{{ route('doctor.dietary-profiles.store') }}">
        @csrf

        <input type="hidden" name="patient_id" value="{{ $patient->id }}">

        <div id="schedule-container">
            <div class="schedule-item">
                <div class="form-group">
                    <label for="time">Time</label>
                    <input type="time" name="schedule[0][time]" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="meal">Meal</label>
                    <input type="text" name="schedule[0][meal]" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="foods">Foods</label>
                    <button type="button" class="btn btn-secondary add-food">Add Food</button>
                    <div class="foods-container">
                        <div class="food-item">
                            <div class="form-group">
                                <label for="food-name">Food Name</label>
                                <input type="text" name="schedule[0][foods][0][name]" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="food-calories">Calories</label>
                                <input type="number" name="schedule[0][foods][0][calories]" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="food-nutrition">Nutrition Details</label>
                                <input type="text" name="schedule[0][foods][0][nutrition]" class="form-control" required>
                            </div>
                            <button type="button" class="btn btn-danger remove-food">Remove Food</button>
                        </div>
                    </div>
                </div>

                <button type="button" class="btn btn-danger remove-schedule">Remove Schedule</button>
                <hr>
            </div>
        </div>

        <button type="button" id="add-schedule" class="btn btn-secondary">Add Another Schedule</button>

        <button type="submit" class="btn btn-primary">Create Dietary Profile</button>
    </form>
</div>

<script>
    let scheduleIndex = 0;

    document.getElementById('add-schedule').addEventListener('click', function() {
        scheduleIndex++;
        let container = document.getElementById('schedule-container');
        let newSchedule = document.createElement('div');
        newSchedule.classList.add('schedule-item');
        newSchedule.innerHTML = `
            <div class="form-group">
                <label for="time">Time</label>
                <input type="time" name="schedule[${scheduleIndex}][time]" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="meal">Meal</label>
                <input type="text" name="schedule[${scheduleIndex}][meal]" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="foods">Foods</label>
                <button type="button" class="btn btn-secondary add-food">Add Food</button>
                <div class="foods-container">
                    <div class="food-item">
                        <div class="form-group">
                            <label for="food-name">Food Name</label>
                            <input type="text" name="schedule[${scheduleIndex}][foods][0][name]" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="food-calories">Calories</label>
                            <input type="number" name="schedule[${scheduleIndex}][foods][0][calories]" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="food-nutrition">Nutrition Details</label>
                            <input type="text" name="schedule[${scheduleIndex}][foods][0][nutrition]" class="form-control" required>
                        </div>
                        <button type="button" class="btn btn-danger remove-food">Remove Food</button>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-danger remove-schedule">Remove Schedule</button>
            <hr>`;
        container.appendChild(newSchedule);
    });

    document.addEventListener('click', function(e) {
        if (e.target && e.target.classList.contains('add-food')) {
            let scheduleItem = e.target.closest('.schedule-item');
            let foodsContainer = scheduleItem.querySelector('.foods-container');
            let foodIndex = foodsContainer.children.length;
            let scheduleIndex = Array.from(scheduleItem.parentNode.children).indexOf(scheduleItem);
            let newFood = document.createElement('div');
            newFood.classList.add('food-item');
            newFood.innerHTML = `
                <div class="form-group">
                    <label for="food-name">Food Name</label>
                    <input type="text" name="schedule[${scheduleIndex}][foods][${foodIndex}][name]" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="food-calories">Calories</label>
                    <input type="number" name="schedule[${scheduleIndex}][foods][${foodIndex}][calories]" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="food-nutrition">Nutrition Details</label>
                    <input type="text" name="schedule[${scheduleIndex}][foods][${foodIndex}][nutrition]" class="form-control" required>
                </div>
                <button type="button" class="btn btn-danger remove-food">Remove Food</button>`;
            foodsContainer.appendChild(newFood);
        } else if (e.target && e.target.classList.contains('remove-schedule')) {
            e.target.closest('.schedule-item').remove();
        } else if (e.target && e.target.classList.contains('remove-food')) {
            e.target.closestHere is the continuation and completion of the `create.blade.php`:

```blade
                <button type="button" class="btn btn-danger remove-food">Remove Food</button>`;
            foodsContainer.appendChild(newFood);
        } else if (e.target && e.target.classList.contains('remove-schedule')) {
            e.target.closest('.schedule-item').remove();
        } else if (e.target && e.target.classList.contains('remove-food')) {
            e.target.closest('.food-item').remove();
        }
    });
</script>
@endsection
