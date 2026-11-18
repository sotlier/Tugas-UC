<?php

test('the application returns a successful response', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

test('the education page renders all four education cards', function () {
    $response = $this->get('/education');

    $response->assertStatus(200)
        ->assertSee('John Robert Power', false)
        ->assertSee('Public Relations', false)
        ->assertSee('Fashion Design', false)
        ->assertSee('Software Engineering &amp; Digital Marketing', false)
        ->assertSee('Developed confidence, personal presentation, and interpersonal communication skills.', false)
        ->assertSee('Built a foundation in public relations, including strategic communication and relationship-building with audiences.', false)
        ->assertSee('Explored fashion design concepts and the process of turning creative ideas into garment designs.', false)
        ->assertSee('Studied software engineering and digital marketing, combining product development fundamentals with online marketing strategy.', false)
        ->assertSeeInOrder([
            '<footer',
            'href="https://github.com/sotlier/"',
            'href="https://www.linkedin.com/in/itsardy/"',
            'href="https://www.instagram.com/candice_pgmta/"',
        ], false);
});

test('the home page links to a separate education page', function () {
    $response = $this->get('/');

    $response->assertStatus(200)
        ->assertSee(route('education'), false)
        ->assertDontSee('John Robert Power', false);
});

test('the certificates page shows both course certificates', function () {
    $response = $this->get('/certificates');

    $response->assertStatus(200)
        ->assertSee('Full Stack Software Engineering')
        ->assertSee('Full Stack Digital Marketing')
        ->assertSee('24 August 2024')
        ->assertSee('18 January 2025')
        ->assertSee('certificate-files/software-engineering.pdf')
        ->assertSee('certificate-files/digital-marketing.pdf');
});

test('the footer uses the configured social profile links', function () {
    $response = $this->get('/');

    $response->assertStatus(200)
        ->assertSeeInOrder([
            '<footer',
            'href="https://github.com/sotlier/"',
            'href="https://www.linkedin.com/in/itsardy/"',
            'href="https://www.instagram.com/candice_pgmta/"',
        ], false);
});
