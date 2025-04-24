@extends('layouts.app')

@include('components.head')

@section('title', 'Booking Policy')
@section('content')
    <section class="px-5 py-5 mx-auto flex flex-wrap items-center justify-center" id="services">
        <main class="max-w-5xl w-full">
            <section class="mb-8">

                <h2 class="text-2xl font-bold mb-4">OA Tutors Tuition Booking Policy <a class="fa fa-download"
                        aria-hidden="true" href="/assets/docs/oa-tutor-tuition-delivery-policy.pdf" target="_blank"> </a> </h2>


                <p><strong>Objective:</strong><br>
                    The purpose of this policy is to outline the standards and procedures for delivering tuition sessions at
                    OA Tutors. It ensures a high-quality, consistent learning experience for students, both online and
                    in-person.</p>
                <h2 class="text-2xl font-bold mb-4"> 1. Session Preparation</h2>
                <ul class="pl-6 space-y-2">
                    <li><strong>Lesson Planning:</strong> Tutors must thoroughly prepare for each session by creating a
                        tailored lesson plan that aligns with the student’s needs and goals. Tutors are expected to review
                        the student’s progress and adapt lessons accordingly.</li>
                    <li><strong>Learning Materials:</strong> Tutors should ensure that all necessary learning materials
                        (worksheets, presentations, tools) are ready and accessible for both online and in-person sessions.
                        Any resources required should be shared with students in advance where applicable.</li>
                </ul>
                <h2 class="text-2xl font-bold mb-4">2. Punctuality</h2>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Tutors are expected to arrive/log in at least 5 minutes before the session start time to ensure
                        technical setups (for online) or classroom environments (for in-person) are ready.</li>
                    <li>Sessions will begin and end promptly at the scheduled times.</li>
                </ul>
                <h2 class="text-2xl font-bold mb-4">3. Session Delivery</h2>
                <h3><strong>Sessions: </strong> </h3>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Tutors must ensure a stable internet connection, a quiet environment, and all necessary technology
                        (camera, microphone, learning platforms) is functioning properly.</li>
                    <li>Tutors are required to conduct sessions in a professional manner, using screen sharing, digital
                        whiteboards, or interactive tools as needed to enhance the learning experience.</li>
                    <li>All online sessions should be conducted in appropriate attire as outlined in the OA Tutors Dressing
                        Policy.</li>
                </ul>
                <h3><strong> In-Person Sessions:</strong></h3>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Tutors must arrive at the agreed location in adherence to the OA Tutors Dress Code.</li>
                    <li>They must create an engaging and structured learning environment, ensuring that students remain
                        focused and comfortable during the session.</li>
                    <li>Any physical resources used (books, whiteboards, etc.) should be well-organised and relevant to the
                        subject being taught.</li>
                </ul>
                <h2 class="text-2xl font-bold mb-4">4. Engagement and Interaction</h2>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Tutors must ensure that each session is interactive, allowing students ample opportunity to ask
                        questions, participate in exercises, and receive feedback on their progress.</li>
                    <li>Teaching methods should be adaptable, incorporating various learning styles (visual, auditory,
                        kinesthetic) to ensure students remain engaged and motivated.</li>
                </ul>
                <h2 class="text-2xl font-bold mb-4">5. Progress Monitoring</h2>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Tutors are required to track each student’s progress regularly and adjust lessons to target areas of
                        improvement.</li>
                    <li>Feedback should be provided to students and, if applicable, their guardians, outlining strengths,
                        weaknesses, and suggestions for further improvement.</li>
                    <li>Regular assessments or informal quizzes should be used to gauge understanding and retention of
                        material.</li>
                </ul>
                <h2 class="text-2xl font-bold mb-4">6. Communication with Students and Parents</h2>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Open and transparent communication is encouraged between tutors and students (or parents/guardians).
                        Tutors should be available to discuss progress, challenges, or any specific requirements outside of
                        scheduled sessions when necessary.</li>
                    <li>Any concerns regarding student behaviour, attendance, or performance should be reported to OA
                        Tutors’ administration promptly.</li>
                </ul>
                <h2 class="text-2xl font-bold mb-4">7. Use of Technology and Tools</h2>
                <h3><strong>Online Sessions:</strong> </h3>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Tutors should be proficient with the virtual platform used for the session (e.g., Microsoft Teams,
                        Google Meet)
                        and any educational tools or apps (e.g., interactive whiteboards, presentation software). It is the
                        tutor’s responsibility to ensure that both parties have access to and understand how to use the
                        required platforms.</li>
                </ul>
                <h3> <strong>For In-Person Sessions:</strong></h3>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Tutors should come equipped with the necessary teaching aids and tools (e.g., laptops, notebooks,
                        calculators) to facilitate effective learning.</li>
                </ul>
                <h2 class="text-2xl font-bold mb-4">8. Feedback and Evaluation</h2>
                <ul class="list-disc pl-6 space-y-2">
                    <li>After each session, tutors should complete brief session notes, documenting what was covered, how
                        the student responded, and any next steps for future lessons.</li>
                    <li>Tutors are encouraged to request feedback from students and parents to ensure ongoing improvement
                        and adaptation of teaching methods.</li>
                </ul>
                <h2 class="text-2xl font-bold mb-4">9. Professional Conduct</h2>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Tutors are expected to maintain professionalism at all times, ensuring respectful and positive
                        interactions with students, parents, and OA Tutors staff.</li>
                    <li>Any conflicts or challenges that arise during tuition delivery must be reported immediately to OA
                        Tutors management for resolution.</li>
                </ul>
                <h2 class="text-2xl font-bold mb-4">10. Health and Safety (In-Person Sessions)</h2>
                <ul class="list-disc pl-6 space-y-2">
                    <li>For in-person sessions, tutors must ensure that the location is safe and conducive to learning. This
                        includes adhering to any health and safety guidelines relevant to the venue (e.g., COVID-19
                        precautions, fire safety).</li>
                    <li>If sessions take place in the student’s home, tutors must be mindful of boundaries and respect the
                        home environment.</li>
                </ul>
                <p>This policy ensures that both online and in-person tuition is delivered in a professional, structured,
                    and effective manner, contributing to the high educational standards upheld by OA Tutors.</p>
                </div>
            </section>
        </main>
    </section>
@endsection
