@extends('layouts.app')
@include('components.head')
@include('partials.navbar')
@section('content')
    <div class="main">
        <div class="container">
            <div class="blog">

                {{-- <div class="blog-post">
                    <h1 class="h1">{{ $post['title'] }}</h1>
                    <p class="text-sm">
                        <strong>Category:</strong> {{ $post['category'] }} |
                        <strong>Author:</strong> {{ $post['author'] }} |
                        <strong>Published:</strong> {{ \Carbon\Carbon::parse($post['published_at'])->format('M d, Y') }}
                    </p>
                    <div class="blog-post-image">
                        <img src="{{ $post['image'] ?? './assets/img/blog/blog-1.png' }}" alt="{{ $post['title'] }}" />
                    </div>
                    <div class="blog-post-content">
                        {!! $post['content'] !!}
                    </div>
                    <a href="{{ route('blog.index') }}" class="btn btn-secondary">Back to Blog</a>
                </div> --}}

                <div class="blog-post">
                    <h1 class="h1">Comprehensive Guide to the Medway Test (2025-2026 Admissions)</h1>
                    <p class="text-sm">
                        <strong>Category:</strong> Education |
                        <strong>Author:</strong> OA Tutors |
                        <strong>Published:</strong> {{ \Carbon\Carbon::now()->format('M d, Y') }}
                    </p>
                    <div class="blog-post-content">
                        <p>Considering a grammar school education in Medway for your child? At <a href="https://oatutors.co.uk" target="_blank">Oatutors.co.uk</a>, we understand that the 11+ process can feel overwhelming. That's why we've compiled this comprehensive guide to the Medway Test for the 2025-2026 admissions cycle, providing you with the key information you need to support your child's journey.</p>

                        <h2>Which Grammar Schools in Medway Use the Test?</h2>
                        <p>All six grammar schools within the Medway Council authority utilise the Medway Test as part of their admissions process:</p>
                        <ul>
                            <li>Chatham Grammar School</li>
                            <li>Fort Pitt Grammar School</li>
                            <li>Holcombe Grammar School</li>
                            <li>Rainham Mark Grammar School</li>
                            <li>Rochester Grammar School</li>
                            <li>Sir Joseph Williamson’s Mathematical School</li>
                        </ul>
                        <p><strong>Important Note on Co-education:</strong> Exciting changes are on the horizon! While Chatham Grammar School, Fort Pitt Grammar School, and Holcombe Grammar School are currently single-sex institutions (boys or girls only), they will become fully co-educational from September 2026. This means that for the autumn 2025 application window for 2026 entry, boys and girls can apply to all six Medway grammar schools.</p>

                        <h2>Key Dates for Your Calendar (2025-2026 Entry)</h2>
                        <ul>
                            <li><strong>Monday 19th May 2025:</strong> Medway Test registration opens.</li>
                            <li><strong>Friday 13th June 2025:</strong> Medway Test registration closes.</li>
                            <li><strong>Tuesday 16th – Wednesday 17th September 2025:</strong> Medway Test for children attending Medway primary schools.</li>
                            <li><strong>Saturday 20th – Sunday 21st September 2025:</strong> Medway Test for children not attending Medway primary schools.</li>
                            <li><strong>Wednesday 15th October 2025:</strong> Medway Test results released to parents.</li>
                            <li><strong>Friday 31st October 2025:</strong> National deadline to apply for secondary school places.</li>
                            <li><strong>Monday 2nd March 2026:</strong> National school offers day.</li>
                        </ul>
                        <p><em>Remember: Dates can sometimes be subject to change, so it's crucial to always verify the information with your target grammar schools directly.</em></p>

                        <h2>Understanding the Medway Test</h2>
                        <p>The Medway Test is an 11 plus entrance examination specifically designed and used by the grammar schools within the Medway Council authority. A significant advantage is that your child only needs to take this test once, regardless of how many Medway grammar schools they are applying to.</p>

                        <h3>What Does the Medway Test Assess?</h3>
                        <p>The Medway Test comprises three distinct papers:</p>
                        <ul>
                            <li><strong>English:</strong> Reading comprehension, vocabulary, spelling, punctuation, and grammar.</li>
                            <li><strong>Maths:</strong> Key Stage 2 maths topics such as fractions, percentages, and geometry.</li>
                            <li><strong>Reasoning:</strong> Verbal and non-verbal reasoning to assess logical thinking.</li>
                        </ul>

                        <h3>How is the Medway Test Scored?</h3>
                        <p>The scoring process involves raw scores, age-standardisation, and weighted scores. The formula used is:</p>
                        <p><code>(Standardised English score × 2) + (Standardised Maths score × 2) + (Standardised Reasoning score × 1)</code></p>

                        <h2>How to Apply to Medway Grammar Schools</h2>
                        <ol>
                            <li><strong>Register for the Medway Test:</strong> Registration opens on 19th May 2025 and closes on 13th June 2025.</li>
                            <li><strong>Apply for School Places:</strong> Use the Medway Test results to complete your secondary school application by 31st October 2025.</li>
                            <li><strong>National School Offer Day:</strong> Offers are released on 2nd March 2026.</li>
                        </ol>

                        <h2>How Can You Support Your Child's Preparation?</h2>
                        <p>Here are some tips to help your child prepare for the Medway Test:</p>
                        <ul>
                            <li><strong>Embrace Bitesize Learning:</strong> Short, consistent study sessions are more effective.</li>
                            <li><strong>Cultivate a Love of Reading:</strong> Encourage diverse reading to improve comprehension and vocabulary.</li>
                            <li><strong>Refine Exam Technique Through Practice:</strong> Use mock tests and practice papers to build confidence.</li>
                            <li><strong>Celebrate Progress:</strong> Acknowledge your child's efforts and foster a growth mindset.</li>
                        </ul>

                        <p>At <a href="https://oatutors.co.uk" target="_blank">Oatutors.co.uk</a>, we are committed to providing you with the resources and support you need to navigate the 11+ journey successfully. If you have any further questions or would like to explore how our expert tutors can support your child's preparation, please don't hesitate to get in touch.</p>
                    </div>
                    <br>
                    <br>
                    <a href="{{ route('blog.index') }}" class="btn btn-secondary">Back to Blog</a>
                </div>

            </div>
        </div>
    </div>
@endsection
