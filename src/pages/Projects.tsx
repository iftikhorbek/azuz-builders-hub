import { useState } from 'react';
import { Header } from '@/components/layout/Header';
import { Footer } from '@/components/layout/Footer';
import { PageBreadcrumb } from '@/components/common/PageBreadcrumb';
import { Card } from '@/components/ui/card';
import { Button } from '@/components/ui/button';
import { Badge } from '@/components/ui/badge';
import { Building2, Award, TrendingUp, Download, ExternalLink } from 'lucide-react';
import modernDevelopment from '@/assets/modern-development.jpg';
import trainingScene from '@/assets/training-scene.jpg';

const Projects = () => {
  const [selectedCategory, setSelectedCategory] = useState('all');

  const categories = [
    { id: 'all', label: 'All Projects' },
    { id: 'residential', label: 'Residential' },
    { id: 'commercial', label: 'Commercial' },
    { id: 'mixed', label: 'Mixed-Use' },
    { id: 'infrastructure', label: 'Infrastructure' },
  ];

  const projects = [
    {
      id: 1,
      title: 'Green Valley Residential Complex',
      category: 'residential',
      member: 'Green Urban',
      location: 'Bukhara',
      image: modernDevelopment,
      challenge: 'Develop eco-friendly housing in historic city context while meeting modern energy standards',
      solutions: ['Passive solar design', 'Local sustainable materials', 'Rainwater harvesting', 'Energy-efficient HVAC'],
      outcomes: [
        '40% reduction in energy consumption vs. baseline',
        'BREEAM Excellent certification',
        '250 residential units completed',
        'Community green spaces integrated',
      ],
      standards: ['Energy Efficiency', 'Sustainable Materials', 'Water Conservation'],
      downloadUrl: '#',
    },
    {
      id: 2,
      title: 'Tashkent Business Park Phase 2',
      category: 'commercial',
      member: 'Capital Developers',
      location: 'Tashkent',
      image: trainingScene,
      challenge: 'Large-scale office development requiring BIM coordination among 15+ contractors and consultants',
      solutions: ['Full BIM Level 2 implementation', 'Cloud collaboration platform', 'Clash detection workflows', 'Integrated project delivery'],
      outcomes: [
        '25% reduction in design coordination time',
        'Zero major on-site conflicts',
        '120,000 sq.m office space',
        'LEED Gold targeted',
      ],
      standards: ['BIM Implementation', 'Digital Coordination', 'Quality Management'],
      downloadUrl: '#',
    },
    {
      id: 3,
      title: 'SmartCity Mixed-Use District',
      category: 'mixed',
      member: 'SmartCity Group',
      location: 'Tashkent',
      image: modernDevelopment,
      challenge: 'Integrate smart building technologies across residential, retail, and office spaces in unified development',
      solutions: ['IoT sensor network', 'Centralized building management', 'Smart parking systems', 'Digital resident services'],
      outcomes: [
        '30% operational cost savings',
        'Real-time energy monitoring',
        '2,000+ residential units',
        '50,000 sq.m retail/office',
      ],
      standards: ['Smart Building', 'Digital Infrastructure', 'Energy Management'],
      downloadUrl: '#',
    },
  ];

  const filteredProjects = selectedCategory === 'all' 
    ? projects 
    : projects.filter(p => p.category === selectedCategory);

  return (
    <div className="min-h-screen flex flex-col">
      <Header />
      <main className="flex-1">
        {/* Hero */}
        <section className="pattern-bg py-16 md:py-24 border-b">
          <div className="container mx-auto px-4 sm:px-6 lg:px-8">
            <PageBreadcrumb items={[{ label: 'Projects & Best Practices' }]} />
            
            <div className="max-w-3xl">
              <h1 className="text-4xl md:text-5xl font-bold text-foreground mb-6">
                Projects & Best Practices
              </h1>
              <p className="text-xl text-muted-foreground leading-relaxed">
                Real-world case studies demonstrating quality standards, innovation, and lessons learned from member projects.
              </p>
            </div>
          </div>
        </section>

        {/* Category Filter */}
        <section className="py-8 border-b bg-muted/30">
          <div className="container mx-auto px-4 sm:px-6 lg:px-8">
            <div className="flex flex-wrap gap-2">
              {categories.map((category) => (
                <Button
                  key={category.id}
                  variant={selectedCategory === category.id ? 'default' : 'outline'}
                  size="sm"
                  onClick={() => setSelectedCategory(category.id)}
                >
                  {category.label}
                </Button>
              ))}
            </div>
          </div>
        </section>

        {/* Project Cards */}
        <section className="py-16">
          <div className="container mx-auto px-4 sm:px-6 lg:px-8">
            <div className="space-y-12">
              {filteredProjects.map((project) => (
                <Card key={project.id} className="overflow-hidden border-0 card-elevated bg-card">
                  <div className="grid md:grid-cols-5 gap-0">
                    {/* Image */}
                    <div className="md:col-span-2">
                      <img
                        src={project.image}
                        alt={project.title}
                        className="w-full h-full object-cover min-h-[300px]"
                      />
                    </div>

                    {/* Content */}
                    <div className="md:col-span-3 p-8">
                      <div className="flex items-center gap-2 mb-4">
                        <Badge className="bg-primary/10 text-primary border-primary/30 border">
                          {project.category}
                        </Badge>
                        <span className="text-sm text-muted-foreground">by {project.member}</span>
                      </div>

                      <h2 className="text-2xl font-bold text-foreground mb-2">{project.title}</h2>
                      <p className="text-sm text-muted-foreground mb-6 flex items-center gap-1">
                        <Building2 className="h-4 w-4" />
                        {project.location}
                      </p>

                      {/* Challenge */}
                      <div className="mb-6">
                        <h3 className="text-sm font-semibold text-foreground mb-2 flex items-center gap-2">
                          <Award className="h-4 w-4 text-primary" />
                          Challenge
                        </h3>
                        <p className="text-sm text-muted-foreground">{project.challenge}</p>
                      </div>

                      {/* Solutions */}
                      <div className="mb-6">
                        <h3 className="text-sm font-semibold text-foreground mb-2">Solutions & Standards Applied</h3>
                        <div className="flex flex-wrap gap-2 mb-3">
                          {project.standards.map((standard, idx) => (
                            <Badge key={idx} className="bg-success/10 text-success border-success/30 border text-xs">
                              {standard}
                            </Badge>
                          ))}
                        </div>
                        <ul className="space-y-1">
                          {project.solutions.map((solution, idx) => (
                            <li key={idx} className="text-sm text-muted-foreground flex items-start gap-2">
                              <span className="text-primary mt-1">•</span>
                              {solution}
                            </li>
                          ))}
                        </ul>
                      </div>

                      {/* Outcomes */}
                      <div className="mb-6">
                        <h3 className="text-sm font-semibold text-foreground mb-2 flex items-center gap-2">
                          <TrendingUp className="h-4 w-4 text-success" />
                          Outcomes
                        </h3>
                        <ul className="space-y-1">
                          {project.outcomes.map((outcome, idx) => (
                            <li key={idx} className="text-sm text-muted-foreground flex items-start gap-2">
                              <span className="text-success mt-1">✓</span>
                              {outcome}
                            </li>
                          ))}
                        </ul>
                      </div>

                      {/* Actions */}
                      <div className="flex gap-3">
                        <Button variant="cta" size="sm">
                          <Download className="h-4 w-4 mr-2" />
                          Download Case Study
                        </Button>
                        <Button variant="outline" size="sm">
                          <ExternalLink className="h-4 w-4 mr-2" />
                          View Project
                        </Button>
                      </div>
                    </div>
                  </div>
                </Card>
              ))}
            </div>
          </div>
        </section>
      </main>
      <Footer />
    </div>
  );
};

export default Projects;
