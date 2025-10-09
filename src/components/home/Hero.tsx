import { Link } from 'react-router-dom';
import { Button } from '@/components/ui/button';
import { ArrowRight, Users, Building2, Award } from 'lucide-react';
import heroImage from '@/assets/hero-tashkent.jpg';

export const Hero = () => {
  const stats = [
    { label: 'Member Organizations', value: '28+', icon: Users },
    { label: 'Active Projects', value: '150+', icon: Building2 },
    { label: 'Standards Adopted', value: '12', icon: Award },
  ];

  return (
    <section className="relative overflow-hidden pattern-bg">
      <div className="container mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div className="grid lg:grid-cols-2 gap-12 items-center">
          {/* Content */}
          <div className="space-y-8">
            <div className="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 text-primary text-sm font-medium">
              <span className="flex h-2 w-2 rounded-full bg-primary animate-pulse"></span>
              Non-profit Association, Est. 2020
            </div>

            <h1 className="text-4xl md:text-5xl lg:text-6xl font-bold text-foreground leading-tight">
              Uniting Uzbekistan's
              <span className="text-primary"> Developers</span>
            </h1>

            <p className="text-lg md:text-xl text-muted-foreground leading-relaxed max-w-2xl">
              Raising standards, accelerating innovation, and building better cities through collaboration, transparency, and quality.
            </p>

            {/* CTA Buttons */}
            <div className="flex flex-col sm:flex-row gap-4">
              <Button variant="cta" size="lg" asChild>
                <Link to="/membership">
                  Become a Member
                  <ArrowRight className="ml-2 h-5 w-5" />
                </Link>
              </Button>
              <Button variant="outline" size="lg" asChild>
                <Link to="/members">See Our Members</Link>
              </Button>
            </div>

            {/* Stats */}
            <div className="grid grid-cols-3 gap-6 pt-8">
              {stats.map((stat) => (
                <div key={stat.label} className="space-y-2">
                  <div className="flex items-center gap-2">
                    <div className="flex h-8 w-8 items-center justify-center rounded-lg bg-primary/10">
                      <stat.icon className="h-4 w-4 text-primary" />
                    </div>
                  </div>
                  <div className="text-2xl md:text-3xl font-bold text-foreground">{stat.value}</div>
                  <div className="text-xs md:text-sm text-muted-foreground">{stat.label}</div>
                </div>
              ))}
            </div>
          </div>

          {/* Hero Image */}
          <div className="relative">
            <div className="relative rounded-2xl overflow-hidden shadow-xl">
              <img
                src={heroImage}
                alt="Modern Tashkent cityscape showcasing urban development"
                className="w-full h-auto object-cover"
              />
              <div className="absolute inset-0 bg-gradient-to-t from-background/80 via-transparent to-transparent"></div>
            </div>
            
            {/* Floating Trust Badge */}
            <div className="absolute -bottom-6 -left-6 bg-card border-2 border-primary rounded-xl p-4 shadow-xl hidden md:block">
              <div className="flex items-center gap-3">
                <div className="flex h-12 w-12 items-center justify-center rounded-lg bg-success/10">
                  <Award className="h-6 w-6 text-success" />
                </div>
                <div>
                  <div className="text-sm font-semibold text-foreground">Quality Standards</div>
                  <div className="text-xs text-muted-foreground">Certified & Verified</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};
