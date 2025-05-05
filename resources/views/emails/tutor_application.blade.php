<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New OA Tutor Application</title>
</head>
<body>
    <h2>New OA Tutor Application Received</h2>
    <p><strong>Email Address:</strong> {{ $applicationData['email'] }}</p>
    <p><strong>Full Name:</strong> {{ $applicationData['full_name'] }}</p>
    <p><strong>Passionate about education:</strong> {{ $applicationData['passionate_education'] }}</p>
    <p><strong>Flexible schedule:</strong> {{ $applicationData['flexible_schedule'] }}</p>
    <p><strong>Tutoring preference:</strong> {{ $applicationData['tutoring_preference'] }}</p>
    <p><strong>Passion description:</strong> {{ $applicationData['passion_description'] }}</p>
    <p><strong>Subjects proficient in tutoring:</strong> {{ $applicationData['subjects_proficient'] }}</p>
    <p><strong>Age groups and learning styles comfortable with:</strong> {{ $applicationData['age_groups'] ?? 'N/A' }}</p>
    <p><strong>Effective communication skills:</strong> {{ $applicationData['communication_skills'] ?? 'N/A' }}</p>
    <p><strong>Reliability, organization, professionalism:</strong> {{ $applicationData['reliability'] ?? 'N/A' }}</p>
    <p><strong>Additional information:</strong> {{ $applicationData['additional_info'] ?? 'N/A' }}</p>
    <p><strong>Availability:</strong> {{ $applicationData['availability'] ?? 'N/A' }}</p>
    <p><strong>Highest level of education completed:</strong> {{ $applicationData['education_level'] ?? 'N/A' }}</p>
    <p><strong>Prior tutoring experience:</strong> {{ $applicationData['prior_experience'] ?? 'N/A' }}</p>
    <p><strong>Resume/CV:</strong> {{ $applicationData['resume_path'] ? 'Attached' : 'Not provided' }}</p>
</body>
</html>
