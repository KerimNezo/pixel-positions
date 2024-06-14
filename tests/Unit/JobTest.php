<?php
use App\Models\Employer;
use App\Models\Job;


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
