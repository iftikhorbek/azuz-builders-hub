<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        $hero = [
            'headline' => "BUILDING THE FUTURE OF UZBEKISTAN'S URBAN DEVELOPMENT",
            'subheadline' => 'Setting standards. Shaping policy. Building better.',
            'members' => '28+',
            'projects' => '150+',
        ];

        $services = [
            ['icon' => 'scale', 'title' => 'Advocacy & Representation', 'description' => 'We serve as the unified voice of the construction industry in policy discussions with government agencies and urban planning authorities. Our advocacy ensures that industry perspectives and member insights directly inform legislation, building codes, and regulatory frameworks shaping Uzbekistan\'s construction sector.'],
            ['icon' => 'trending-up', 'title' => 'Quality & Standards', 'description' => 'We develop and maintain comprehensive industry standards covering construction quality benchmarks, workplace safety protocols, and environmental sustainability practices. Our framework helps members deliver projects meeting international best practices while adhering to local requirements, fostering continuous improvement across all construction activities.'],
            ['icon' => 'lightbulb', 'title' => 'Innovation & Digitalization', 'description' => 'We accelerate digital transformation by promoting Building Information Modeling (BIM), cloud collaboration platforms, digital permitting systems, and smart building technologies. Through partnerships with technology providers and hands-on training, we help members leverage innovation to improve efficiency, reduce costs, and enhance project delivery.'],
            ['icon' => 'graduation-cap', 'title' => 'Training & Development', 'description' => 'We provide comprehensive professional development including technical training programs, industry certifications, executive workshops, and networking forums. Our curriculum covers emerging construction technologies, regulatory compliance, and project management best practices, empowering professionals to advance their expertise and drive organizational success.'],
        ];

        $updates = [
            ['type' => 'policy', 'icon' => 'file-text', 'title' => 'New Building Energy Efficiency Standards', 'description' => 'Public consultation phase for updated residential energy performance requirements', 'status' => 'consultation', 'date' => '2025-11-05', 'link' => route('policy')],
            ['type' => 'event', 'icon' => 'calendar', 'title' => 'Annual Construction Innovation Forum', 'description' => 'Join 200+ industry leaders discussing BIM adoption and digital transformation', 'status' => 'upcoming', 'date' => '2025-10-15', 'link' => route('events')],
            ['type' => 'member', 'icon' => 'users', 'title' => 'Welcome New Member: TashkentStroy Group', 'description' => 'Leading residential developer joins AZUZ with portfolio of 15+ active projects', 'status' => 'new', 'date' => '2025-10-01', 'link' => route('members')],
        ];

        $members = [
            'TashkentStroy',
            'UzbekConstruct',
            'Capital Developers',
            'Modern Building Co',
            'Green Urban',
            'SmartCity Group',
            'Construction Plus',
            'Sigma Development',
        ];

        $metrics = [
            ['icon' => 'file-check', 'value' => '18', 'label' => 'Policy Proposals', 'sublabel' => 'Submitted to government agencies', 'color' => 'text-primary', 'background' => 'bg-primary/10'],
            ['icon' => 'users', 'value' => '2,400+', 'label' => 'Training Hours', 'sublabel' => 'Professional development delivered', 'color' => 'text-accent', 'background' => 'bg-accent/10'],
            ['icon' => 'award', 'value' => '12', 'label' => 'Standards Adopted', 'sublabel' => 'Quality and safety frameworks', 'color' => 'text-success', 'background' => 'bg-success/10'],
            ['icon' => 'trending-up', 'value' => '150+', 'label' => 'Active Projects', 'sublabel' => 'By member organizations', 'color' => 'text-primary', 'background' => 'bg-primary/10'],
        ];

        return $this->renderPage('pages.home.index', 'Home', [
            ['view' => 'blocks.home-hero', 'data' => $hero],
            ['view' => 'blocks.home-what-we-do', 'data' => ['services' => $services]],
            ['view' => 'blocks.home-updates', 'data' => ['updates' => $updates]],
            ['view' => 'blocks.home-impact', 'data' => ['metrics' => $metrics]],
            ['view' => 'blocks.home-member-marquee', 'data' => ['members' => $members]],
        ]);
    }

    public function about(): View
    {
        $values = [
            ['icon' => 'users', 'title' => 'Industry Unity', 'description' => 'Representing and amplifying the collective voice of construction developers across Uzbekistan.'],
            ['icon' => 'award', 'title' => 'Quality & Modernization', 'description' => 'Elevating construction standards through best practices, training, and innovation adoption.'],
            ['icon' => 'file-text', 'title' => 'Transparency & Compliance', 'description' => 'Promoting ethical business practices and regulatory adherence across all member organizations.'],
            ['icon' => 'target', 'title' => 'Innovation & Digitalization', 'description' => 'Driving digital transformation with BIM, smart technologies, and modern project management.'],
        ];

        $timeline = [
            ['year' => '2020', 'event' => 'AZUZ Founded', 'description' => 'Non-profit association established with 12 founding members'],
            ['year' => '2021', 'event' => 'First Standards', 'description' => 'Launched initial quality and safety framework guidelines'],
            ['year' => '2022', 'event' => 'Policy Impact', 'description' => 'First policy proposals adopted by regulatory agencies'],
            ['year' => '2023', 'event' => 'Training Programs', 'description' => 'Professional development certification system launched'],
            ['year' => '2024', 'event' => 'Digital Transformation', 'description' => 'BIM adoption initiative with government partnership'],
        ];

        $governance = [
            ['role' => 'Board of Directors', 'members' => '9 members', 'description' => 'Strategic oversight and policy direction'],
            ['role' => 'Executive Committee', 'members' => '5 members', 'description' => 'Day-to-day operations and program management'],
            ['role' => 'Technical Committees', 'members' => '4 specialized groups', 'description' => 'Urban Planning, Housing, Technical Norms, Digitalization'],
        ];

        return $this->renderPage('pages.about.index', 'About', [
            [
                'view' => 'blocks.page-hero',
                'data' => [
                    'fullHeight' => true,
                    'backgroundImage' => 'assets/about-hero-bg.png',
                    'badge' => 'Non-profit Organization - Est. 2020',
                    'title' => 'About AZUZ',
                    'subtitle' => 'The Association of Developers of Uzbekistan (AZUZ) is a non-profit organization uniting construction developers to elevate industry standards, drive innovation, and shape policy for sustainable urban development.',
                ],
            ],
            [
                'view' => 'blocks.about-mission-vision',
                'data' => [
                    'mission' => [
                        'icon' => 'target',
                        'title' => 'Our Mission',
                        'description' => "To unite Uzbekistan's construction developers in raising industry standards, accelerating innovation, and building better cities through collaboration, transparency, and quality-driven practices.",
                    ],
                    'vision' => [
                        'icon' => 'eye',
                        'title' => 'Our Vision',
                        'description' => 'A modernized, transparent, and internationally competitive construction industry that creates sustainable, livable cities for all Uzbekistan residents.',
                    ],
                    'image' => [
                        'src' => 'assets/azuz-about.png',
                        'alt' => 'AZUZ team collaboration',
                    ],
                ],
            ],
            ['view' => 'blocks.about-values', 'data' => ['values' => $values]],
            ['view' => 'blocks.about-governance', 'data' => ['items' => $governance]],
            ['view' => 'blocks.about-timeline', 'data' => ['items' => $timeline]],
        ]);
    }

    public function membership(): View
    {
        $benefits = [
            ['title' => 'Policy Influence', 'description' => 'Direct participation in shaping construction regulations and urban planning frameworks'],
            ['title' => 'Industry Standards', 'description' => 'Access to quality benchmarks, safety protocols, and best practice guidelines'],
            ['title' => 'Professional Development', 'description' => 'Exclusive training programs, certifications, and knowledge-sharing events'],
            ['title' => 'Market Visibility', 'description' => 'Profile listing, verified member badge, and exposure in industry publications'],
            ['title' => 'Networking', 'description' => 'Connect with fellow developers, suppliers, and government stakeholders'],
            ['title' => 'Technical Support', 'description' => 'Guidance on BIM adoption, permitting processes, and compliance requirements'],
        ];

        $categories = [
            [
                'icon' => 'building',
                'name' => 'Developer Member',
                'description' => 'Construction companies actively developing residential, commercial, or mixed-use projects',
                'requirements' => [
                    'Active construction license',
                    'Minimum 2 years operation',
                    'At least 1 completed project',
                    'Good standing with regulators',
                ],
                'fee' => '$5,500/year',
            ],
            [
                'icon' => 'briefcase',
                'name' => 'Associate Member',
                'description' => 'Suppliers, contractors, consultants, and service providers to the construction industry',
                'requirements' => [
                    'Valid business registration',
                    'Construction sector focus',
                    'Professional references',
                    'Compliance with industry standards',
                ],
                'fee' => '$3,500/year',
            ],
            [
                'icon' => 'users',
                'name' => 'Institutional Member',
                'description' => 'Universities, research institutes, and professional associations supporting the industry',
                'requirements' => [
                    'Educational or research mandate',
                    'Construction/urban planning focus',
                    'Non-profit status',
                    'Board approval',
                ],
                'fee' => '$1,000/year',
            ],
        ];

        $steps = [
            ['number' => '01', 'title' => 'Review Requirements', 'description' => 'Confirm your organization meets eligibility criteria for your membership category'],
            ['number' => '02', 'title' => 'Prepare Documentation', 'description' => 'Gather licenses, financial statements, and project portfolio highlights'],
            ['number' => '03', 'title' => 'Submit Application', 'description' => 'Complete the online application form with supporting documents and references'],
            ['number' => '04', 'title' => 'Board Review & Approval', 'description' => 'Our membership committee evaluates applications within 14 business days'],
        ];

        return $this->renderPage('pages.membership.index', 'Membership', [
            [
                'view' => 'blocks.page-hero',
                'data' => [
                    'title' => 'Join AZUZ',
                    'subtitle' => "Become part of Uzbekistan's leading construction industry association and help shape the future of urban development.",
                    'actions' => [
                        ['label' => 'Start Application', 'variant' => 'cta', 'size' => 'lg', 'icon' => 'arrow-right', 'url' => '#application'],
                    ],
                ],
            ],
            ['view' => 'blocks.membership-benefits', 'data' => ['benefits' => $benefits]],
            ['view' => 'blocks.membership-categories', 'data' => ['categories' => $categories]],
            [
                'view' => 'blocks.membership-application',
                'data' => [
                    'steps' => $steps,
                    'supportCopy' => sprintf('Questions? <a href="%s" class="text-primary hover:underline">Contact our membership team</a>', route('contact')),
                ],
            ],
        ]);
    }

    public function members(): View
    {
        $memberDirectory = [
            ['id' => 1, 'name' => 'TashkentStroy Group', 'segment' => 'Developer', 'region' => 'Tashkent', 'size' => 'Large', 'projects' => 15, 'verified' => true, 'description' => 'Leading residential and commercial developer with focus on sustainable urban development.'],
            ['id' => 2, 'name' => 'UzbekConstruct', 'segment' => 'Developer', 'region' => 'Samarkand', 'size' => 'Medium', 'projects' => 8, 'verified' => true, 'description' => 'Specialized in heritage-sensitive modern development and mixed-use complexes.'],
            ['id' => 3, 'name' => 'Capital Developers', 'segment' => 'Developer', 'region' => 'Tashkent', 'size' => 'Large', 'projects' => 22, 'verified' => true, 'description' => 'Premium residential and office space developer with BIM-integrated workflows.'],
            ['id' => 4, 'name' => 'Modern Building Co', 'segment' => 'Associate', 'region' => 'Tashkent', 'size' => 'Medium', 'projects' => 0, 'verified' => true, 'description' => 'Construction materials supplier and technical consulting services provider.'],
            ['id' => 5, 'name' => 'Green Urban', 'segment' => 'Developer', 'region' => 'Bukhara', 'size' => 'Small', 'projects' => 4, 'verified' => true, 'description' => 'Eco-friendly residential developments with energy-efficient building standards.'],
            ['id' => 6, 'name' => 'SmartCity Group', 'segment' => 'Developer', 'region' => 'Tashkent', 'size' => 'Large', 'projects' => 18, 'verified' => true, 'description' => 'Smart building technologies and integrated urban development solutions.'],
        ];

        $memberStats = [
            ['label' => 'Total Members', 'value' => '28'],
            ['label' => 'Developers', 'value' => '22'],
            ['label' => 'Associate Members', 'value' => '5'],
            ['label' => 'Institutional', 'value' => '1'],
        ];

        $segments = ['all', 'Developer', 'Associate', 'Institutional'];
        $regions = ['all', 'Tashkent', 'Samarkand', 'Bukhara', 'Fergana'];

        return $this->renderPage('pages.members.index', 'Members', [
            [
                'view' => 'blocks.page-hero',
                'data' => [
                    'badge' => 'Verified Members',
                    'badgeIcon' => 'shield-check',
                    'title' => 'Member Directory',
                    'subtitle' => "Explore Uzbekistan's leading construction developers, suppliers, and industry partners committed to quality and innovation.",
                    'stats' => $memberStats,
                ],
            ],
            [
                'view' => 'blocks.members-directory',
                'data' => [
                    'members' => $memberDirectory,
                    'segments' => $segments,
                    'regions' => $regions,
                ],
            ],
        ]);
    }

    public function policy(): View
    {
        $policies = [
            ['id' => 1, 'title' => 'Residential Energy Efficiency Standards Update', 'status' => 'consultation', 'date' => '2025-10-05', 'description' => 'Proposed updates to residential building energy performance requirements, including insulation standards and HVAC efficiency benchmarks.', 'impact' => 'Affects all new residential developments over 1,000 sq.m', 'downloadUrl' => '#'],
            ['id' => 2, 'title' => 'BIM Adoption Framework for Public Projects', 'status' => 'adopted', 'date' => '2025-09-15', 'description' => 'Mandatory Building Information Modeling requirements for government-funded construction projects above $10M budget.', 'impact' => 'Government contracts, improved coordination and documentation', 'downloadUrl' => '#'],
            ['id' => 3, 'title' => 'Construction Safety Protocol Enhancement', 'status' => 'adopted', 'date' => '2025-08-20', 'description' => 'Enhanced safety requirements for high-rise construction, including new fall protection and site monitoring standards.', 'impact' => 'Buildings over 15 floors, reduced workplace incidents', 'downloadUrl' => '#'],
            ['id' => 4, 'title' => 'Sustainable Materials Incentive Program', 'status' => 'draft', 'date' => '2025-10-12', 'description' => 'Tax incentives for developers using certified sustainable and locally-sourced construction materials.', 'impact' => 'Voluntary participation, potential 3-5% cost reduction', 'downloadUrl' => '#'],
            ['id' => 5, 'title' => 'Digital Permitting System Phase 2', 'status' => 'consultation', 'date' => '2025-09-28', 'description' => 'Expansion of online building permit application system to include complex commercial and mixed-use projects.', 'impact' => 'Faster approvals, reduced processing time by 40%', 'downloadUrl' => '#'],
        ];

        $workstreams = [
            ['icon' => 'building-2', 'name' => 'Urban Planning', 'description' => 'Zoning, land use, and mixed-use development frameworks', 'progress' => 65, 'activeItems' => 4],
            ['icon' => 'scale', 'name' => 'Housing & Utilities', 'description' => 'Residential standards, utility connections, affordability', 'progress' => 80, 'activeItems' => 3],
            ['icon' => 'trending-up', 'name' => 'Technical Norms', 'description' => 'Construction quality, safety protocols, material standards', 'progress' => 90, 'activeItems' => 2],
            ['icon' => 'laptop', 'name' => 'Digitalization', 'description' => 'BIM, digital permitting, smart building technologies', 'progress' => 55, 'activeItems' => 5],
        ];

        return $this->renderPage('pages.policy.index', 'Policy & Standards', [
            [
                'view' => 'blocks.page-hero',
                'data' => [
                    'breadcrumbs' => [['label' => 'Policy & Standards']],
                    'title' => 'Policy & Standards',
                    'subtitle' => "Track policy developments, participate in consultations, and access industry standards that shape Uzbekistan's construction sector.",
                ],
            ],
            ['view' => 'blocks.policy-workstreams', 'data' => ['workstreams' => $workstreams]],
            ['view' => 'blocks.policy-timeline', 'data' => ['policies' => $policies]],
        ]);
    }

    public function events(): View
    {
        $events = [
            ['id' => 1, 'title' => 'Annual Construction Innovation Forum 2025', 'type' => 'Forum', 'date' => '2025-11-15', 'time' => '09:00 - 17:00', 'location' => 'Hyatt Regency Tashkent', 'attendees' => 200, 'status' => 'upcoming', 'description' => "Join 200+ industry leaders to explore BIM adoption, digital transformation, and sustainable construction practices shaping Uzbekistan's future.", 'speakers' => ['Dr. Alisher Karimov', 'Sarah Chen', 'Dmitri Volkov'], 'agenda' => ['Keynote: Digital Construction Trends', 'Panel: BIM Implementation', 'Workshop: Smart Building Technologies'], 'price' => 'Free for members'],
            ['id' => 2, 'title' => 'Energy Efficiency Standards Workshop', 'type' => 'CPD', 'date' => '2025-10-25', 'time' => '14:00 - 16:30', 'location' => 'AZUZ Office, BC Sigma', 'attendees' => 50, 'status' => 'upcoming', 'description' => 'Hands-on training on new residential energy efficiency requirements and certification processes.', 'speakers' => ['Eng. Rustam Nazarov'], 'agenda' => ['New Standards Overview', 'Calculation Methodology', 'Case Studies', 'Q&A'], 'price' => ''],
            ['id' => 3, 'title' => 'Quarterly Member Networking Event', 'type' => 'Networking', 'date' => '2025-10-30', 'time' => '18:00 - 21:00', 'location' => 'Tashkent City Park', 'attendees' => 80, 'status' => 'upcoming', 'description' => 'Informal networking opportunity for member organizations to connect and share insights.', 'speakers' => [], 'agenda' => ['Welcome Reception', 'Open Networking', 'Industry Updates'], 'price' => 'Free for members'],
            ['id' => 4, 'title' => 'BIM for Project Managers Webinar', 'type' => 'Webinar', 'date' => '2025-11-08', 'time' => '15:00 - 16:00', 'location' => 'Online', 'attendees' => 150, 'status' => 'upcoming', 'description' => 'Virtual session covering BIM workflows, collaboration tools, and ROI analysis for project management teams.', 'speakers' => ['Olga Ivanova', 'Tech Partner: Autodesk'], 'agenda' => ['BIM Benefits', 'Implementation Roadmap', 'Live Demo', 'Q&A'], 'price' => 'Free'],
        ];

        return $this->renderPage('pages.events.index', 'Training & Events', [
            [
                'view' => 'blocks.page-hero',
                'data' => [
                    'breadcrumbs' => [['label' => 'Training & Events']],
                    'title' => 'Training & Events',
                    'subtitle' => 'Professional development programs, industry forums, and networking opportunities to advance your expertise.',
                ],
            ],
            ['view' => 'blocks.events-upcoming', 'data' => ['events' => $events]],
        ]);
    }

    public function projects(): View
    {
        $categories = [
            ['id' => 'all', 'label' => 'All Projects'],
            ['id' => 'residential', 'label' => 'Residential'],
            ['id' => 'commercial', 'label' => 'Commercial'],
            ['id' => 'mixed', 'label' => 'Mixed-Use'],
            ['id' => 'infrastructure', 'label' => 'Infrastructure'],
        ];

        $projects = [
            ['id' => 1, 'title' => 'Green Valley Residential Complex', 'category' => 'residential', 'member' => 'Green Urban', 'location' => 'Bukhara', 'image' => 'assets/modern-development.jpg', 'challenge' => 'Develop eco-friendly housing in historic city context while meeting modern energy standards', 'solutions' => ['Passive solar design', 'Local sustainable materials', 'Rainwater harvesting', 'Energy-efficient HVAC'], 'outcomes' => ['40% reduction in energy consumption vs. baseline', 'BREEAM Excellent certification', '250 residential units completed', 'Community green spaces integrated'], 'standards' => ['Energy Efficiency', 'Sustainable Materials', 'Water Conservation'], 'downloadUrl' => '#'],
            ['id' => 2, 'title' => 'Tashkent Business Park Phase 2', 'category' => 'commercial', 'member' => 'Capital Developers', 'location' => 'Tashkent', 'image' => 'assets/training-scene.jpg', 'challenge' => 'Large-scale office development requiring BIM coordination among 15+ contractors and consultants', 'solutions' => ['Full BIM Level 2 implementation', 'Cloud collaboration platform', 'Clash detection workflows', 'Integrated project delivery'], 'outcomes' => ['25% reduction in design coordination time', 'Zero major on-site conflicts', '120,000 sq.m office space', 'LEED Gold targeted'], 'standards' => ['BIM Implementation', 'Digital Coordination', 'Quality Management'], 'downloadUrl' => '#'],
            ['id' => 3, 'title' => 'SmartCity Mixed-Use District', 'category' => 'mixed', 'member' => 'SmartCity Group', 'location' => 'Tashkent', 'image' => 'assets/modern-development.jpg', 'challenge' => 'Integrate smart building technologies across residential, retail, and office spaces in unified development', 'solutions' => ['IoT sensor network', 'Centralized building management', 'Smart parking systems', 'Digital resident services'], 'outcomes' => ['30% operational cost savings', 'Real-time energy monitoring', '2,000+ residential units', '50,000 sq.m retail/office'], 'standards' => ['Smart Building', 'Digital Infrastructure', 'Energy Management'], 'downloadUrl' => '#'],
        ];

        return $this->renderPage('pages.projects.index', 'Projects & Best Practices', [
            [
                'view' => 'blocks.page-hero',
                'data' => [
                    'breadcrumbs' => [['label' => 'Projects & Best Practices']],
                    'title' => 'Projects & Best Practices',
                    'subtitle' => 'Real-world case studies demonstrating quality standards, innovation, and lessons learned from member projects.',
                ],
            ],
            ['view' => 'blocks.projects-directory', 'data' => ['projects' => $projects, 'categories' => $categories]],
        ]);
    }

    public function resources(): View
    {
        $pressReleases = [
            ['id' => 1, 'title' => 'AZUZ Welcomes Three New Member Organizations', 'date' => '2025-10-01', 'excerpt' => 'Leading developers join association to advance industry standards and innovation initiatives.', 'type' => 'Press Release'],
            ['id' => 2, 'title' => 'New Energy Efficiency Standards Enter Consultation Phase', 'date' => '2025-10-05', 'excerpt' => 'Public feedback period opens for updated residential building energy requirements.', 'type' => 'Press Release'],
            ['id' => 3, 'title' => 'Annual Construction Innovation Forum Announced', 'date' => '2025-09-20', 'excerpt' => '200+ industry leaders to gather for discussions on BIM adoption and digital transformation.', 'type' => 'Press Release'],
        ];

        $documents = [
            ['id' => 1, 'title' => 'Construction Market Report Q3 2025', 'category' => 'Research', 'date' => '2025-09-30', 'fileType' => 'PDF', 'size' => '2.4 MB'],
            ['id' => 2, 'title' => 'BIM Implementation Guide for Developers', 'category' => 'Standards', 'date' => '2025-09-15', 'fileType' => 'PDF', 'size' => '5.1 MB'],
            ['id' => 3, 'title' => 'Safety Protocol Handbook 2025', 'category' => 'Safety', 'date' => '2025-08-20', 'fileType' => 'PDF', 'size' => '3.8 MB'],
            ['id' => 4, 'title' => 'Sustainable Materials Procurement Guide', 'category' => 'Guidelines', 'date' => '2025-07-10', 'fileType' => 'PDF', 'size' => '1.9 MB'],
        ];

        $mediaCoverage = [
            ['id' => 1, 'outlet' => 'Uzbekistan Today', 'title' => 'Construction Association Drives Industry Modernization', 'date' => '2025-09-25', 'link' => '#'],
            ['id' => 2, 'outlet' => 'Business Tashkent', 'title' => 'BIM Adoption Accelerates in Uzbek Construction Sector', 'date' => '2025-09-18', 'link' => '#'],
            ['id' => 3, 'outlet' => 'Central Asia Development News', 'title' => 'AZUZ Members Lead in Sustainable Building Practices', 'date' => '2025-08-30', 'link' => '#'],
        ];

        return $this->renderPage('pages.resources.index', 'Resources & Newsroom', [
            [
                'view' => 'blocks.page-hero',
                'data' => [
                    'breadcrumbs' => [['label' => 'Resources & Newsroom']],
                    'title' => 'Resources & Newsroom',
                    'subtitle' => 'Access research, market data, press releases, and media coverage about AZUZ and the construction industry.',
                ],
            ],
            ['view' => 'blocks.resources-press', 'data' => ['pressReleases' => $pressReleases]],
            ['view' => 'blocks.resources-documents', 'data' => ['documents' => $documents]],
            ['view' => 'blocks.resources-media', 'data' => ['mediaCoverage' => $mediaCoverage]],
            ['view' => 'blocks.resources-media-cta', 'data' => ['email' => 'press@azuz.uz', 'phone' => '+998 (71) 123-45-69']],
        ]);
    }

    public function contact(): View
    {
        $contactInfo = [
            ['icon' => 'map-pin', 'title' => 'Address', 'details' => ['BC Sigma, 71 Nukus Street', 'Tashkent, Uzbekistan']],
            ['icon' => 'phone', 'title' => 'Phone', 'details' => ['+998 (71) 123-45-67', '+998 (71) 123-45-68']],
            ['icon' => 'mail', 'title' => 'Email', 'details' => ['info@azuz.uz', 'membership@azuz.uz']],
            ['icon' => 'clock', 'title' => 'Business Hours', 'details' => ['Monday - Friday: 9:00 - 18:00', 'Saturday - Sunday: Closed']],
        ];

        $inquiryTypes = [
            ['value' => 'general', 'label' => 'General Inquiry'],
            ['value' => 'membership', 'label' => 'Membership'],
            ['value' => 'events', 'label' => 'Events & Training'],
            ['value' => 'policy', 'label' => 'Policy & Standards'],
            ['value' => 'media', 'label' => 'Media & Press'],
            ['value' => 'partnership', 'label' => 'Partnership'],
        ];

        return $this->renderPage('pages.contact.index', 'Contact', [
            [
                'view' => 'blocks.page-hero',
                'data' => [
                    'breadcrumbs' => [['label' => 'Contact']],
                    'title' => 'Get in Touch',
                    'subtitle' => 'Have questions about membership, events, or policy initiatives? Our team is here to help.',
                ],
            ],
            ['view' => 'blocks.contact-info', 'data' => ['items' => $contactInfo]],
            ['view' => 'blocks.contact-form', 'data' => ['inquiryTypes' => $inquiryTypes]],
            ['view' => 'blocks.contact-map'],
        ]);
    }

    /**
     * @param array<int, array<string, mixed>> $blocks
     */
    protected function renderPage(string $view, string $title, array $blocks, array $additional = []): View
    {
        return view($view, array_merge([
            'pageTitle' => $title,
            'blocks' => $blocks,
        ], $additional));
    }
}


