import { Header } from '@/components/layout/Header';
import { Footer } from '@/components/layout/Footer';
import { PageBreadcrumb } from '@/components/common/PageBreadcrumb';
import { PolicyTimeline } from '@/components/policy/PolicyTimeline';
import { Card } from '@/components/ui/card';
import { Scale, TrendingUp, Building2, Laptop } from 'lucide-react';

const Policy = () => {
  const policies = [
    {
      id: 1,
      title: 'Residential Energy Efficiency Standards Update',
      status: 'consultation' as const,
      date: '2025-10-05',
      description: 'Proposed updates to residential building energy performance requirements, including insulation standards and HVAC efficiency benchmarks.',
      impact: 'Affects all new residential developments over 1,000 sq.m',
      downloadUrl: '#',
    },
    {
      id: 2,
      title: 'BIM Adoption Framework for Public Projects',
      status: 'adopted' as const,
      date: '2025-09-15',
      description: 'Mandatory Building Information Modeling requirements for government-funded construction projects above $5M budget.',
      impact: 'Government contracts, improved coordination and documentation',
      downloadUrl: '#',
    },
    {
      id: 3,
      title: 'Construction Safety Protocol Enhancement',
      status: 'adopted' as const,
      date: '2025-08-20',
      description: 'Enhanced safety requirements for high-rise construction, including new fall protection and site monitoring standards.',
      impact: 'Buildings over 15 floors, reduced workplace incidents',
      downloadUrl: '#',
    },
    {
      id: 4,
      title: 'Sustainable Materials Incentive Program',
      status: 'draft' as const,
      date: '2025-10-12',
      description: 'Tax incentives for developers using certified sustainable and locally-sourced construction materials.',
      impact: 'Voluntary participation, potential 3-5% cost reduction',
      downloadUrl: '#',
    },
    {
      id: 5,
      title: 'Digital Permitting System Phase 2',
      status: 'consultation' as const,
      date: '2025-09-28',
      description: 'Expansion of online building permit application system to include complex commercial and mixed-use projects.',
      impact: 'Faster approvals, reduced processing time by 40%',
      downloadUrl: '#',
    },
  ];

  const workstreams = [
    {
      icon: Building2,
      name: 'Urban Planning',
      description: 'Zoning, land use, and mixed-use development frameworks',
      progress: 65,
      activeItems: 4,
    },
    {
      icon: Scale,
      name: 'Housing & Utilities',
      description: 'Residential standards, utility connections, affordability',
      progress: 80,
      activeItems: 3,
    },
    {
      icon: TrendingUp,
      name: 'Technical Norms',
      description: 'Construction quality, safety protocols, material standards',
      progress: 90,
      activeItems: 2,
    },
    {
      icon: Laptop,
      name: 'Digitalization',
      description: 'BIM, digital permitting, smart building technologies',
      progress: 55,
      activeItems: 5,
    },
  ];

  return (
    <div className="min-h-screen flex flex-col">
      <Header />
      <main className="flex-1">
        {/* Hero */}
        <section className="pattern-bg py-16 md:py-24 border-b">
          <div className="container mx-auto px-4 sm:px-6 lg:px-8">
            <PageBreadcrumb items={[{ label: 'Policy & Standards' }]} />
            
            <div className="max-w-3xl">
              <h1 className="text-4xl md:text-5xl font-bold text-foreground mb-6">
                Policy & Standards
              </h1>
              <p className="text-xl text-muted-foreground leading-relaxed">
                Track policy developments, participate in consultations, and access industry standards that shape Uzbekistan's construction sector.
              </p>
            </div>
          </div>
        </section>

        {/* Workstreams */}
        <section className="py-16 bg-muted/30">
          <div className="container mx-auto px-4 sm:px-6 lg:px-8">
            <div className="text-center max-w-3xl mx-auto mb-12">
              <h2 className="text-3xl md:text-4xl font-bold text-foreground mb-4">
                Policy Workstreams
              </h2>
              <p className="text-lg text-muted-foreground">
                Four key areas driving industry modernization and regulatory alignment
              </p>
            </div>

            <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
              {workstreams.map((stream, index) => (
                <Card key={index} className="p-6 card-elevated bg-card border-0">
                  <div className="flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 mb-4">
                    <stream.icon className="h-6 w-6 text-primary" />
                  </div>
                  <h3 className="text-lg font-semibold text-foreground mb-2">{stream.name}</h3>
                  <p className="text-sm text-muted-foreground mb-4">{stream.description}</p>
                  
                  <div className="space-y-2">
                    <div className="flex justify-between text-xs">
                      <span className="text-muted-foreground">Progress</span>
                      <span className="font-medium text-foreground">{stream.progress}%</span>
                    </div>
                    <div className="h-2 rounded-full bg-muted overflow-hidden">
                      <div 
                        className="h-full bg-primary transition-all duration-300"
                        style={{ width: `${stream.progress}%` }}
                      ></div>
                    </div>
                    <div className="text-xs text-muted-foreground">
                      {stream.activeItems} active initiatives
                    </div>
                  </div>
                </Card>
              ))}
            </div>
          </div>
        </section>

        {/* Policy Timeline */}
        <section className="py-16 md:py-24">
          <div className="container mx-auto px-4 sm:px-6 lg:px-8">
            <div className="text-center max-w-3xl mx-auto mb-12">
              <h2 className="text-3xl md:text-4xl font-bold text-foreground mb-4">
                Policy Tracker
              </h2>
              <p className="text-lg text-muted-foreground">
                Current and upcoming policy initiatives affecting the construction industry
              </p>
            </div>

            <div className="max-w-5xl mx-auto">
              <PolicyTimeline policies={policies} />
            </div>
          </div>
        </section>
      </main>
      <Footer />
    </div>
  );
};

export default Policy;
