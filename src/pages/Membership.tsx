import { Header } from '@/components/layout/Header';
import { Footer } from '@/components/layout/Footer';
import { Button } from '@/components/ui/button';
import { Card } from '@/components/ui/card';
import { Check, Users, Building, Briefcase, ArrowRight } from 'lucide-react';
import { Link } from 'react-router-dom';

const Membership = () => {
  const benefits = [
    {
      title: 'Policy Influence',
      description: 'Direct participation in shaping construction regulations and urban planning frameworks',
    },
    {
      title: 'Industry Standards',
      description: 'Access to quality benchmarks, safety protocols, and best practice guidelines',
    },
    {
      title: 'Professional Development',
      description: 'Exclusive training programs, certifications, and knowledge-sharing events',
    },
    {
      title: 'Market Visibility',
      description: 'Profile listing, verified member badge, and exposure in industry publications',
    },
    {
      title: 'Networking',
      description: 'Connect with fellow developers, suppliers, and government stakeholders',
    },
    {
      title: 'Technical Support',
      description: 'Guidance on BIM adoption, permitting processes, and compliance requirements',
    },
  ];

  const categories = [
    {
      icon: Building,
      name: 'Developer Member',
      description: 'Construction companies actively developing residential, commercial, or mixed-use projects',
      requirements: [
        'Active construction license',
        'Minimum 2 years operation',
        'At least 1 completed project',
        'Good standing with regulators',
      ],
      fee: '$2,500/year',
    },
    {
      icon: Briefcase,
      name: 'Associate Member',
      description: 'Suppliers, contractors, consultants, and service providers to the construction industry',
      requirements: [
        'Valid business registration',
        'Construction sector focus',
        'Professional references',
        'Compliance with industry standards',
      ],
      fee: '$1,500/year',
    },
    {
      icon: Users,
      name: 'Institutional Member',
      description: 'Universities, research institutes, and professional associations supporting the industry',
      requirements: [
        'Educational or research mandate',
        'Construction/urban planning focus',
        'Non-profit status',
        'Board approval',
      ],
      fee: '$1,000/year',
    },
  ];

  const steps = [
    {
      number: '01',
      title: 'Review Requirements',
      description: 'Confirm your organization meets eligibility criteria for your membership category',
    },
    {
      number: '02',
      title: 'Prepare Documents',
      description: 'Gather registration certificates, licenses, project portfolio, and financial statements',
    },
    {
      number: '03',
      title: 'Submit Application',
      description: 'Complete online form and upload required documentation for review',
    },
    {
      number: '04',
      title: 'Committee Review',
      description: 'Membership committee evaluates application within 10 business days',
    },
    {
      number: '05',
      title: 'Approval & Payment',
      description: 'Upon approval, pay annual membership fee to activate your account',
    },
    {
      number: '06',
      title: 'Welcome Package',
      description: 'Receive member badge, directory listing, and access to exclusive resources',
    },
  ];

  return (
    <div className="min-h-screen flex flex-col">
      <Header />
      <main className="flex-1">
        {/* Hero */}
        <section className="pattern-bg py-16 md:py-24 border-b">
          <div className="container mx-auto px-4 sm:px-6 lg:px-8">
            <div className="max-w-3xl">
              <h1 className="text-4xl md:text-5xl font-bold text-foreground mb-6">
                Join AZUZ
              </h1>
              <p className="text-xl text-muted-foreground leading-relaxed mb-8">
                Become part of Uzbekistan's leading construction industry association and help shape the future of urban development.
              </p>
              <Button variant="cta" size="lg">
                Start Application
                <ArrowRight className="ml-2 h-5 w-5" />
              </Button>
            </div>
          </div>
        </section>

        {/* Membership Benefits */}
        <section className="py-16 md:py-24">
          <div className="container mx-auto px-4 sm:px-6 lg:px-8">
            <div className="text-center max-w-3xl mx-auto mb-12">
              <h2 className="text-3xl md:text-4xl font-bold text-foreground mb-4">
                Membership Benefits
              </h2>
              <p className="text-lg text-muted-foreground">
                Comprehensive support for your organization's growth and industry leadership
              </p>
            </div>

            <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
              {benefits.map((benefit, index) => (
                <Card key={index} className="p-6 border-2 hover:border-primary transition-colors">
                  <div className="flex items-start gap-3">
                    <div className="flex-shrink-0 mt-0.5">
                      <div className="flex h-6 w-6 items-center justify-center rounded-full bg-success/10">
                        <Check className="h-4 w-4 text-success" />
                      </div>
                    </div>
                    <div>
                      <h3 className="text-lg font-semibold text-foreground mb-2">{benefit.title}</h3>
                      <p className="text-sm text-muted-foreground">{benefit.description}</p>
                    </div>
                  </div>
                </Card>
              ))}
            </div>
          </div>
        </section>

        {/* Membership Categories */}
        <section className="py-16 md:py-24 bg-muted/30">
          <div className="container mx-auto px-4 sm:px-6 lg:px-8">
            <div className="text-center max-w-3xl mx-auto mb-12">
              <h2 className="text-3xl md:text-4xl font-bold text-foreground mb-4">
                Membership Categories
              </h2>
              <p className="text-lg text-muted-foreground">
                Choose the membership type that fits your organization
              </p>
            </div>

            <div className="grid md:grid-cols-3 gap-6">
              {categories.map((category, index) => (
                <Card key={index} className="p-6 card-elevated bg-card border-0 flex flex-col">
                  <div className="flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 mb-4">
                    <category.icon className="h-6 w-6 text-primary" />
                  </div>
                  <h3 className="text-xl font-semibold text-foreground mb-2">{category.name}</h3>
                  <p className="text-sm text-muted-foreground mb-4">{category.description}</p>
                  
                  <div className="mb-4 pb-4 border-b">
                    <div className="text-2xl font-bold text-primary">{category.fee}</div>
                    <div className="text-xs text-muted-foreground">Annual membership</div>
                  </div>

                  <div className="space-y-2 mb-6 flex-grow">
                    {category.requirements.map((req, idx) => (
                      <div key={idx} className="flex items-start gap-2 text-sm">
                        <Check className="h-4 w-4 text-success flex-shrink-0 mt-0.5" />
                        <span className="text-muted-foreground">{req}</span>
                      </div>
                    ))}
                  </div>

                  <Button variant="outline" className="w-full mt-auto">
                    Apply Now
                  </Button>
                </Card>
              ))}
            </div>
          </div>
        </section>

        {/* Application Process */}
        <section className="py-16 md:py-24">
          <div className="container mx-auto px-4 sm:px-6 lg:px-8">
            <div className="text-center max-w-3xl mx-auto mb-12">
              <h2 className="text-3xl md:text-4xl font-bold text-foreground mb-4">
                How to Apply
              </h2>
              <p className="text-lg text-muted-foreground">
                Simple, transparent process from application to approval
              </p>
            </div>

            <div className="max-w-4xl mx-auto">
              <div className="grid md:grid-cols-2 gap-6">
                {steps.map((step, index) => (
                  <Card key={index} className="p-6 card-elevated bg-card border-0">
                    <div className="flex items-start gap-4">
                      <div className="flex-shrink-0 flex h-12 w-12 items-center justify-center rounded-xl bg-primary text-primary-foreground font-bold text-lg">
                        {step.number}
                      </div>
                      <div>
                        <h3 className="text-lg font-semibold text-foreground mb-2">{step.title}</h3>
                        <p className="text-sm text-muted-foreground">{step.description}</p>
                      </div>
                    </div>
                  </Card>
                ))}
              </div>
            </div>

            <div className="text-center mt-12">
              <Button variant="cta" size="lg">
                Begin Your Application
                <ArrowRight className="ml-2 h-5 w-5" />
              </Button>
              <p className="text-sm text-muted-foreground mt-4">
                Questions? <Link to="/contact" className="text-primary hover:underline">Contact our membership team</Link>
              </p>
            </div>
          </div>
        </section>
      </main>
      <Footer />
    </div>
  );
};

export default Membership;
