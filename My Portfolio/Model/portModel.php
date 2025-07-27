<?php
class PortfolioModel {
    public function getProfileData() {
        return [
            "name" => "Raian Tasnim Saoda",
            "phone" => ["01709624076", "01326122645"],
            "email" => "raiantasnim2411@gmail.com",
            "address" => "Kuril, Kuratoli, Khilkhet, Dhaka-1229",
            "education" => [
                [
                    "degree" => "Bachelor of Science in Computer Science and Engineering",
                    "major_minor" => "Major: Software Engineering | Minor: Information Systems",
                    "gpa" => "3.85 out of 4.00",
                    "year" => "2022–2025",
                    "institute" => "American International University Bangladesh (AIUB)"
                ],
                [
                    "degree" => "Higher Secondary Certificate (HSC)",
                    "gpa" => "5.00 out of 5.00",
                    "year" => "2017–2019",
                    "institute" => "Patuakhali Govt. Mahila College, Patuakhali"
                ],
                [
                    "degree" => "Secondary School Certificate (SSC)",
                    "gpa" => "4.50 out of 5.00",
                    "year" => "2015–2017",
                    "institute" => "Patuakhali Govt. Girls’ High School, Patuakhali"
                ]
            ],
            "skills" => [
                "languages" => ["C++", "C#", "Java", "Python", "JavaScript"],
                "web" => ["HTML", "CSS", "ASP.NET"],
                "database" => "MySQL",
                "tools" => ["GitHub", "VS Code", "Postman"]
            ],
            "projects" => [
                [
                    "title" => "Portfolio Project",
                    "type" => "Solo Project",
                    "tech" => "HTML, CSS & JavaScript",
                    "link" => "https://github.com/Raian-Tasnim/Portfolio"
                ],
                [
                    "title" => "SRS Document",
                    "type" => "Team-member",
                    "link" => "https://github.com/Raian-Tasnim/SRS-Document"
                ],
                [
                    "title" => "API Design",
                    "type" => "Solo Project",
                    "link" => "https://github.com/Raian-Tasnim/API-delivery-system"
                ]
            ],
            "achievements" => [
                "Dean’s Award (Fall 2022-2023)",
                "Dean’s Award (Spring 2022-2023)",
                "Dean’s Award (Fall 2023-2024)",
                "Dean’s Award (Spring 2023-2024)",
                "Dean’s Award (Fall 2024-2025)",
                "Academic Scholarship"
            ],
            "references" => [
                [
                    "name" => "Dr. Md. Manzurul Hasan",
                    "title" => "Chief Marketing Officer, SSLCOMMERZ / Associate Professor, AIUB",
                    "email" => "manzurul@aiub.edu",
                    "phone" => "+880 1715-246399"
                ],
                [
                    "name" => "Dr. Mohammad Mahmudul Hasan",
                    "title" => "Associate Professor, Special Assistant (CS)",
                    "email" => "m.hasan@aiub.edu",
                    "phone" => "01886600367"
                ]
            ]
        ];
    }
}
?>
