import { Link } from 'react-router-dom';
import { Card } from '@/components/ui/card';
import { Button } from '@/components/ui/button';
import { Calendar, FileText, Users, ArrowRight } from 'lucide-react';
import { Badge } from '@/components/ui/badge';

export const Updates = () => {
  const updates = [
    {
      type: 'policy',
      icon: FileText,
      title: 'New Building Energy Efficiency Standards',
      description: 'Public consultation phase for updated residential energy performance requirements',
      status: 'consultation',
      date: '2025-10-05',
      link: '/policy',
    },
    {
      type: 'event',
      icon: Calendar,
      title: 'Annual Construction Innovation Forum',
      description: 'Join 200+ industry leaders discussing BIM adoption and digital transformation',
      status: 'upcoming',
      date: '2025-11-15',
      link: '/events',
    },
    {
      type: 'member',
      icon: Users,
      title: 'Welcome New Member: TashkentStroy Group',
      description: 'Leading residential developer joins AZUZ with portfolio of 15+ active projects',
      status: 'new',
      date: '2025-10-01',
      link: '/members',
    },
  ];

  const getStatusBadge = (status: string) => {
    const variants: Record<string, string> = {
      consultation: 'status-consultation',
      upcoming: 'status-draft',
      new: 'status-adopted',
    };
    return variants[status] || '';
  };

  return (
    <section className="py-16 md:py-24">
      <div className="container mx-auto px-4 sm:px-6 lg:px-8">
        <div className="flex items-center justify-between mb-12">
          <div>
            <h2 className="text-3xl md:text-4xl font-bold text-foreground mb-2">
              Latest Updates
            </h2>
            <p className="text-lg text-muted-foreground">
              Stay informed on policy developments, events, and member news
            </p>
          </div>
          <Button variant="outline" size="sm" className="hidden md:flex" asChild>
            <Link to="/resources">View All</Link>
          </Button>
        </div>

        <div className="grid md:grid-cols-3 gap-6">
          {updates.map((update, index) => (
            <Card key={index} className="p-6 card-elevated bg-card border-0 flex flex-col">
              <div className="flex items-start justify-between mb-4">
                <div className="flex h-10 w-10 items-center justify-center rounded-lg bg-primary/10">
                  <update.icon className="h-5 w-5 text-primary" />
                </div>
                <Badge className={`${getStatusBadge(update.status)} text-xs px-2 py-1 rounded-full`}>
                  {update.status}
                </Badge>
              </div>

              <h3 className="text-lg font-semibold text-foreground mb-2">
                {update.title}
              </h3>
              <p className="text-sm text-muted-foreground mb-4 flex-grow">
                {update.description}
              </p>

              <div className="flex items-center justify-between mt-auto pt-4 border-t">
                <span className="text-xs text-muted-foreground">
                  {new Date(update.date).toLocaleDateString('en-US', {
                    month: 'short',
                    day: 'numeric',
                    year: 'numeric',
                  })}
                </span>
                <Link
                  to={update.link}
                  className="text-sm font-medium text-primary hover:text-primary-hover inline-flex items-center gap-1"
                >
                  Learn more
                  <ArrowRight className="h-3 w-3" />
                </Link>
              </div>
            </Card>
          ))}
        </div>

        <div className="mt-8 text-center md:hidden">
          <Button variant="outline" size="sm" asChild>
            <Link to="/resources">View All Updates</Link>
          </Button>
        </div>
      </div>
    </section>
  );
};
