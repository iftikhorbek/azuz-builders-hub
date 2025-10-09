import { Header } from '@/components/layout/Header';
import { Footer } from '@/components/layout/Footer';
import { Card } from '@/components/ui/card';
import { Target, Eye, Users, Award, FileText, Calendar } from 'lucide-react';
import collaborationImage from '@/assets/collaboration.jpg';

const About = () => {
  const values = [
    {
      icon: Users,
      title: 'Industry Unity',
      description: 'Representing and amplifying the collective voice of construction developers across Uzbekistan.',
    },
    {
      icon: Award,
      title: 'Quality & Modernization',
      description: 'Elevating construction standards through best practices, training, and innovation adoption.',
    },
    {
      icon: FileText,
      title: 'Transparency & Compliance',
      description: 'Promoting ethical business practices and regulatory adherence across all member organizations.',
    },
    {
      icon: Target,
      title: 'Innovation & Digitalization',
      description: 'Driving digital transformation with BIM, smart technologies, and modern project management.',
    },
  ];

  const timeline = [
    { year: '2020', event: 'AZUZ Founded', description: 'Non-profit association established with 12 founding members' },
    { year: '2021', event: 'First Standards', description: 'Launched initial quality and safety framework guidelines' },
    { year: '2022', event: 'Policy Impact', description: 'First policy proposals adopted by regulatory agencies' },
    { year: '2023', event: 'Training Programs', description: 'Professional development certification system launched' },
    { year: '2024', event: 'Digital Transformation', description: 'BIM adoption initiative with government partnership' },
    { year: '2025', event: 'Expansion', description: 'Growing to 28+ member organizations nationwide' },
  ];

  const governance = [
    {
      role: 'Board of Directors',
      members: '9 members',
      description: 'Strategic oversight and policy direction',
    },
    {
      role: 'Executive Committee',
      members: '5 members',
      description: 'Day-to-day operations and program management',
    },
    {
      role: 'Technical Committees',
      members: '4 specialized groups',
      description: 'Urban Planning, Housing, Technical Norms, Digitalization',
    },
  ];

  return (
    <div className="min-h-screen flex flex-col">
      <Header />
      <main className="flex-1">
        {/* Hero Section */}
        <section className="pattern-bg py-16 md:py-24 border-b">
          <div className="container mx-auto px-4 sm:px-6 lg:px-8">
            <div className="max-w-3xl">
              <div className="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 text-primary text-sm font-medium mb-6">
                Non-profit Organization • Est. 2020
              </div>
              <h1 className="text-4xl md:text-5xl font-bold text-foreground mb-6">
                About AZUZ
              </h1>
              <p className="text-xl text-muted-foreground leading-relaxed">
                The Association of Developers of Uzbekistan (AZUZ) is a non-profit organization uniting construction developers to elevate industry standards, drive innovation, and shape policy for sustainable urban development.
              </p>
            </div>
          </div>
        </section>

        {/* Mission & Vision */}
        <section className="py-16 md:py-24">
          <div className="container mx-auto px-4 sm:px-6 lg:px-8">
            <div className="grid md:grid-cols-2 gap-12 items-center">
              <div className="space-y-8">
                <div>
                  <div className="flex items-center gap-3 mb-4">
                    <div className="flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10">
                      <Target className="h-6 w-6 text-primary" />
                    </div>
                    <h2 className="text-2xl font-bold text-foreground">Our Mission</h2>
                  </div>
                  <p className="text-muted-foreground leading-relaxed">
                    To unite Uzbekistan's construction developers in raising industry standards, accelerating innovation, and building better cities through collaboration, transparency, and quality-driven practices.
                  </p>
                </div>

                <div>
                  <div className="flex items-center gap-3 mb-4">
                    <div className="flex h-12 w-12 items-center justify-center rounded-xl bg-accent/10">
                      <Eye className="h-6 w-6 text-accent" />
                    </div>
                    <h2 className="text-2xl font-bold text-foreground">Our Vision</h2>
                  </div>
                  <p className="text-muted-foreground leading-relaxed">
                    A modernized, transparent, and internationally competitive construction industry that creates sustainable, livable cities for all Uzbekistan residents.
                  </p>
                </div>
              </div>

              <div className="relative">
                <img
                  src={collaborationImage}
                  alt="AZUZ team collaboration"
                  className="rounded-2xl shadow-xl w-full h-auto"
                />
              </div>
            </div>
          </div>
        </section>

        {/* Core Values */}
        <section className="py-16 md:py-24 bg-muted/30">
          <div className="container mx-auto px-4 sm:px-6 lg:px-8">
            <div className="text-center max-w-3xl mx-auto mb-12">
              <h2 className="text-3xl md:text-4xl font-bold text-foreground mb-4">
                Our Core Values
              </h2>
              <p className="text-lg text-muted-foreground">
                Principles that guide our work and shape our impact
              </p>
            </div>

            <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
              {values.map((value) => (
                <Card key={value.title} className="p-6 card-elevated bg-card border-0">
                  <div className="flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 mb-4">
                    <value.icon className="h-6 w-6 text-primary" />
                  </div>
                  <h3 className="text-lg font-semibold text-foreground mb-2">{value.title}</h3>
                  <p className="text-sm text-muted-foreground leading-relaxed">{value.description}</p>
                </Card>
              ))}
            </div>
          </div>
        </section>

        {/* Governance */}
        <section className="py-16 md:py-24" id="governance">
          <div className="container mx-auto px-4 sm:px-6 lg:px-8">
            <div className="text-center max-w-3xl mx-auto mb-12">
              <h2 className="text-3xl md:text-4xl font-bold text-foreground mb-4">
                Governance Structure
              </h2>
              <p className="text-lg text-muted-foreground">
                Transparent leadership ensuring accountability and effective representation
              </p>
            </div>

            <div className="grid md:grid-cols-3 gap-6 max-w-5xl mx-auto">
              {governance.map((item, index) => (
                <Card key={index} className="p-6 text-center bg-card border-2">
                  <div className="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 mb-4">
                    <Users className="h-6 w-6 text-primary" />
                  </div>
                  <h3 className="text-lg font-semibold text-foreground mb-2">{item.role}</h3>
                  <div className="text-sm font-medium text-primary mb-2">{item.members}</div>
                  <p className="text-sm text-muted-foreground">{item.description}</p>
                </Card>
              ))}
            </div>
          </div>
        </section>

        {/* Timeline */}
        <section className="py-16 md:py-24 bg-muted/30">
          <div className="container mx-auto px-4 sm:px-6 lg:px-8">
            <div className="text-center max-w-3xl mx-auto mb-12">
              <h2 className="text-3xl md:text-4xl font-bold text-foreground mb-4">
                Our Journey
              </h2>
              <p className="text-lg text-muted-foreground">
                Key milestones in building a stronger construction industry
              </p>
            </div>

            <div className="max-w-4xl mx-auto">
              <div className="relative">
                {/* Timeline Line */}
                <div className="absolute left-8 top-0 bottom-0 w-0.5 bg-border"></div>

                {/* Timeline Items */}
                <div className="space-y-8">
                  {timeline.map((item, index) => (
                    <div key={index} className="relative flex gap-6">
                      <div className="flex-shrink-0 flex h-16 w-16 items-center justify-center rounded-xl bg-primary text-primary-foreground font-bold shadow-md z-10">
                        {item.year}
                      </div>
                      <Card className="flex-1 p-6 card-elevated bg-card">
                        <h3 className="text-lg font-semibold text-foreground mb-2">{item.event}</h3>
                        <p className="text-sm text-muted-foreground">{item.description}</p>
                      </Card>
                    </div>
                  ))}
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
      <Footer />
    </div>
  );
};

export default About;
