import { useState } from 'react';
import { Header } from '@/components/layout/Header';
import { Footer } from '@/components/layout/Footer';
import { PageBreadcrumb } from '@/components/common/PageBreadcrumb';
import { Card } from '@/components/ui/card';
import { Button } from '@/components/ui/button';
import { Badge } from '@/components/ui/badge';
import { Calendar, MapPin, Users, Clock, ExternalLink } from 'lucide-react';
import {
  Dialog,
  DialogContent,
  DialogDescription,
  DialogHeader,
  DialogTitle,
  DialogTrigger,
  DialogFooter,
} from '@/components/ui/dialog';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';

const Events = () => {
  const [selectedEvent, setSelectedEvent] = useState<number | null>(null);

  const events = [
    {
      id: 1,
      title: 'Annual Construction Innovation Forum 2025',
      type: 'Forum',
      date: '2025-11-15',
      time: '09:00 - 17:00',
      location: 'Hyatt Regency Tashkent',
      attendees: 200,
      status: 'upcoming',
      description: 'Join 200+ industry leaders to explore BIM adoption, digital transformation, and sustainable construction practices shaping Uzbekistan\'s future.',
      speakers: ['Dr. Alisher Karimov', 'Sarah Chen', 'Dmitri Volkov'],
      agenda: ['Keynote: Digital Construction Trends', 'Panel: BIM Implementation', 'Workshop: Smart Building Technologies'],
      price: 'Free for members',
    },
    {
      id: 2,
      title: 'Energy Efficiency Standards Workshop',
      type: 'CPD',
      date: '2025-10-25',
      time: '14:00 - 16:30',
      location: 'AZUZ Office, BC Sigma',
      attendees: 50,
      status: 'upcoming',
      description: 'Hands-on training on new residential energy efficiency requirements and certification processes.',
      speakers: ['Eng. Rustam Nazarov'],
      agenda: ['New Standards Overview', 'Calculation Methodology', 'Case Studies', 'Q&A'],
      price: '$50',
    },
    {
      id: 3,
      title: 'Quarterly Member Networking Event',
      type: 'Networking',
      date: '2025-10-30',
      time: '18:00 - 21:00',
      location: 'Tashkent City Park',
      attendees: 80,
      status: 'upcoming',
      description: 'Informal networking opportunity for member organizations to connect and share insights.',
      speakers: [],
      agenda: ['Welcome Reception', 'Open Networking', 'Industry Updates'],
      price: 'Free for members',
    },
    {
      id: 4,
      title: 'BIM for Project Managers Webinar',
      type: 'Webinar',
      date: '2025-11-08',
      time: '15:00 - 16:00',
      location: 'Online',
      attendees: 150,
      status: 'upcoming',
      description: 'Virtual session covering BIM workflows, collaboration tools, and ROI analysis for project management teams.',
      speakers: ['Olga Ivanova', 'Tech Partner: Autodesk'],
      agenda: ['BIM Benefits', 'Implementation Roadmap', 'Live Demo', 'Q&A'],
      price: 'Free',
    },
  ];

  const getEventTypeClass = (type: string) => {
    const classes: Record<string, string> = {
      Forum: 'bg-primary/10 text-primary border-primary/30',
      CPD: 'bg-accent/10 text-accent border-accent/30',
      Networking: 'bg-success/10 text-success border-success/30',
      Webinar: 'bg-purple-100 text-purple-700 border-purple-300 dark:bg-purple-900/20 dark:text-purple-400',
    };
    return classes[type] || '';
  };

  return (
    <div className="min-h-screen flex flex-col">
      <Header />
      <main className="flex-1">
        {/* Hero */}
        <section className="pattern-bg py-16 md:py-24 border-b">
          <div className="container mx-auto px-4 sm:px-6 lg:px-8">
            <PageBreadcrumb items={[{ label: 'Training & Events' }]} />
            
            <div className="max-w-3xl">
              <h1 className="text-4xl md:text-5xl font-bold text-foreground mb-6">
                Training & Events
              </h1>
              <p className="text-xl text-muted-foreground leading-relaxed">
                Professional development programs, industry forums, and networking opportunities to advance your expertise.
              </p>
            </div>
          </div>
        </section>

        {/* Upcoming Events */}
        <section className="py-16">
          <div className="container mx-auto px-4 sm:px-6 lg:px-8">
            <div className="flex items-center justify-between mb-8">
              <h2 className="text-3xl font-bold text-foreground">Upcoming Events</h2>
              <Button variant="outline" size="sm">
                <Calendar className="h-4 w-4 mr-2" />
                View Calendar
              </Button>
            </div>

            <div className="grid md:grid-cols-2 gap-6">
              {events.map((event) => (
                <Card key={event.id} className="p-6 card-elevated bg-card border-0 flex flex-col">
                  <div className="flex items-start justify-between mb-4">
                    <Badge className={`${getEventTypeClass(event.type)} border text-xs px-2 py-1 rounded-full`}>
                      {event.type}
                    </Badge>
                    <span className="text-xs font-medium text-primary">{event.price}</span>
                  </div>

                  <h3 className="text-xl font-semibold text-foreground mb-3">{event.title}</h3>
                  <p className="text-sm text-muted-foreground mb-4 flex-grow">
                    {event.description}
                  </p>

                  <div className="space-y-2 mb-4 pb-4 border-t pt-4">
                    <div className="flex items-center gap-2 text-sm text-muted-foreground">
                      <Calendar className="h-4 w-4" />
                      {new Date(event.date).toLocaleDateString('en-US', {
                        weekday: 'long',
                        month: 'long',
                        day: 'numeric',
                        year: 'numeric',
                      })}
                    </div>
                    <div className="flex items-center gap-2 text-sm text-muted-foreground">
                      <Clock className="h-4 w-4" />
                      {event.time}
                    </div>
                    <div className="flex items-center gap-2 text-sm text-muted-foreground">
                      <MapPin className="h-4 w-4" />
                      {event.location}
                    </div>
                    <div className="flex items-center gap-2 text-sm text-muted-foreground">
                      <Users className="h-4 w-4" />
                      {event.attendees} expected attendees
                    </div>
                  </div>

                  <Dialog>
                    <DialogTrigger asChild>
                      <Button variant="cta" className="w-full">
                        Register Now
                      </Button>
                    </DialogTrigger>
                    <DialogContent className="bg-popover">
                      <DialogHeader>
                        <DialogTitle>Register for {event.title}</DialogTitle>
                        <DialogDescription>
                          Complete the form below to secure your spot at this event.
                        </DialogDescription>
                      </DialogHeader>
                      
                      <div className="grid gap-4 py-4">
                        <div className="grid gap-2">
                          <Label htmlFor="name">Full Name</Label>
                          <Input id="name" placeholder="Enter your full name" />
                        </div>
                        <div className="grid gap-2">
                          <Label htmlFor="email">Email</Label>
                          <Input id="email" type="email" placeholder="your.email@company.com" />
                        </div>
                        <div className="grid gap-2">
                          <Label htmlFor="organization">Organization</Label>
                          <Input id="organization" placeholder="Your company name" />
                        </div>
                        <div className="grid gap-2">
                          <Label htmlFor="phone">Phone Number</Label>
                          <Input id="phone" type="tel" placeholder="+998 XX XXX XX XX" />
                        </div>
                      </div>

                      <DialogFooter>
                        <Button variant="outline">Cancel</Button>
                        <Button variant="cta">Confirm Registration</Button>
                      </DialogFooter>
                    </DialogContent>
                  </Dialog>

                  <Button variant="ghost" size="sm" className="mt-2">
                    View Full Details
                    <ExternalLink className="ml-2 h-3 w-3" />
                  </Button>
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

export default Events;
