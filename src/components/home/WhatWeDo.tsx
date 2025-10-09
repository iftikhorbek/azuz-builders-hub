import { Scale, TrendingUp, Lightbulb, GraduationCap } from 'lucide-react';
import { Card } from '@/components/ui/card';

export const WhatWeDo = () => {
  const services = [
    {
      icon: Scale,
      title: 'Advocacy & Representation',
      description: 'Representing member interests in policy discussions with government agencies, ensuring industry voices shape regulatory frameworks.',
    },
    {
      icon: TrendingUp,
      title: 'Quality & Standards',
      description: 'Developing and promoting industry standards for construction quality, safety protocols, and sustainable development practices.',
    },
    {
      icon: Lightbulb,
      title: 'Innovation & Digitalization',
      description: 'Driving adoption of modern technologies including BIM, digital permitting, and smart building management systems.',
    },
    {
      icon: GraduationCap,
      title: 'Training & Development',
      description: 'Professional development programs, certifications, and knowledge-sharing events to elevate industry capabilities.',
    },
  ];

  return (
    <section className="py-16 md:py-24 bg-muted/30">
      <div className="container mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center max-w-3xl mx-auto mb-12">
          <h2 className="text-3xl md:text-4xl font-bold text-foreground mb-4">
            What We Do
          </h2>
          <p className="text-lg text-muted-foreground">
            Building a stronger construction ecosystem through collaboration, standards, and innovation
          </p>
        </div>

        <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
          {services.map((service) => (
            <Card
              key={service.title}
              className="p-6 card-elevated bg-card border-0 hover:border-primary/20"
            >
              <div className="flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 mb-4">
                <service.icon className="h-6 w-6 text-primary" />
              </div>
              <h3 className="text-lg font-semibold text-foreground mb-2">{service.title}</h3>
              <p className="text-sm text-muted-foreground leading-relaxed">{service.description}</p>
            </Card>
          ))}
        </div>
      </div>
    </section>
  );
};
