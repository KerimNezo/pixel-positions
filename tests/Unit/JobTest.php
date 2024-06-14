<?php
use App\Models\Employer;
use App\Models\Job;
use Database\Factories\JobFactory;


it('belongs to an employer', function () {
    // AAA (Arrange - Act - Assert)
    // na osnovu onoga što testamo, kreiramo AAA

    // Arrange - create the env to run your test
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id
    ]);

    // Act - Perform some kind of action
    expect($job->employer->is($employer))->toBeTrue();
    //provjeravamo ovdje bukvalno da li je u job varijabli employer objekat jednak employeru koji smo prethodno generisali, a trebao bi biti jer smo pri kreiranju job-a dodijelili poslu employer_id od prethodnog employera

    // Assert - What is expected to happen as result of that 
    // najcesce su Act i Assert dijelovi razdvojeni, ali u ovom slucaju mozemo ih spojiti
});

it('can have tags', function () {
    // AAA
    // jedan realni primjer TDD. Kreiramo prvo test za neki feature koji zelimo da imamo
    // i napravimo logilu kako zelimo da radi i onda na osnovu toga kreiramo feature koji nam treba

    // Arrange
    $job = Job::factory()->create(); // kreiramo $job objekat

    // Act
    $job->tag('Frontend'); // dodajemo $job objektu tag 'Frontend'

    // Assert
    expect($job->tags)->toHaveCount(1); // provjeravamo da li nam u $job objektu array 'tags' ima jedan item

});
