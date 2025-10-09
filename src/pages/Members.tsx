import { useState } from 'react';
import { Header } from '@/components/layout/Header';
import { Footer } from '@/components/layout/Footer';
import { Card } from '@/components/ui/card';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Badge } from '@/components/ui/badge';
import { Search, MapPin, Building2, ShieldCheck, ExternalLink } from 'lucide-react';
import {
  Select,
  SelectContent,
  SelectItem,
  SelectTrigger,
  SelectValue,
} from '@/components/ui/select';

const Members = () => {
  const [searchQuery, setSearchQuery] = useState('');
  const [filterSegment, setFilterSegment] = useState('all');
  const [filterRegion, setFilterRegion] = useState('all');

  const members = [
    {
      id: 1,
      name: 'TashkentStroy Group',
      segment: 'Developer',
      region: 'Tashkent',
      size: 'Large',
      projects: 15,
      verified: true,
      description: 'Leading residential and commercial developer with focus on sustainable urban development.',
    },
    {
      id: 2,
      name: 'UzbekConstruct',
      segment: 'Developer',
      region: 'Samarkand',
      size: 'Medium',
      projects: 8,
      verified: true,
      description: 'Specialized in heritage-sensitive modern development and mixed-use complexes.',
    },
    {
      id: 3,
      name: 'Capital Developers',
      segment: 'Developer',
      region: 'Tashkent',
      size: 'Large',
      projects: 22,
      verified: true,
      description: 'Premium residential and office space developer with BIM-integrated workflows.',
    },
    {
      id: 4,
      name: 'Modern Building Co',
      segment: 'Associate',
      region: 'Tashkent',
      size: 'Medium',
      projects: 0,
      verified: true,
      description: 'Construction materials supplier and technical consulting services provider.',
    },
    {
      id: 5,
      name: 'Green Urban',
      segment: 'Developer',
      region: 'Bukhara',
      size: 'Small',
      projects: 4,
      verified: true,
      description: 'Eco-friendly residential developments with energy-efficient building standards.',
    },
    {
      id: 6,
      name: 'SmartCity Group',
      segment: 'Developer',
      region: 'Tashkent',
      size: 'Large',
      projects: 18,
      verified: true,
      description: 'Smart building technologies and integrated urban development solutions.',
    },
  ];

  const filteredMembers = members.filter((member) => {
    const matchesSearch = member.name.toLowerCase().includes(searchQuery.toLowerCase()) ||
                         member.description.toLowerCase().includes(searchQuery.toLowerCase());
    const matchesSegment = filterSegment === 'all' || member.segment === filterSegment;
    const matchesRegion = filterRegion === 'all' || member.region === filterRegion;
    return matchesSearch && matchesSegment && matchesRegion;
  });

  const stats = [
    { label: 'Total Members', value: '28' },
    { label: 'Developers', value: '22' },
    { label: 'Associate Members', value: '5' },
    { label: 'Institutional', value: '1' },
  ];

  return (
    <div className="min-h-screen flex flex-col">
      <Header />
      <main className="flex-1">
        {/* Hero */}
        <section className="pattern-bg py-16 md:py-24 border-b">
          <div className="container mx-auto px-4 sm:px-6 lg:px-8">
            <div className="max-w-3xl">
              <div className="flex items-center gap-2 mb-4">
                <ShieldCheck className="h-6 w-6 text-success" />
                <span className="text-sm font-medium text-success">Verified Members</span>
              </div>
              <h1 className="text-4xl md:text-5xl font-bold text-foreground mb-6">
                Member Directory
              </h1>
              <p className="text-xl text-muted-foreground leading-relaxed">
                Explore Uzbekistan's leading construction developers, suppliers, and industry partners committed to quality and innovation.
              </p>
            </div>

            {/* Stats */}
            <div className="grid grid-cols-2 md:grid-cols-4 gap-4 mt-8">
              {stats.map((stat, index) => (
                <Card key={index} className="p-4 bg-card border-2">
                  <div className="text-2xl font-bold text-primary">{stat.value}</div>
                  <div className="text-sm text-muted-foreground">{stat.label}</div>
                </Card>
              ))}
            </div>
          </div>
        </section>

        {/* Filters */}
        <section className="py-8 border-b bg-muted/30">
          <div className="container mx-auto px-4 sm:px-6 lg:px-8">
            <div className="flex flex-col md:flex-row gap-4">
              <div className="flex-1 relative">
                <Search className="absolute left-3 top-1/2 transform -translate-y-1/2 h-4 w-4 text-muted-foreground" />
                <Input
                  type="text"
                  placeholder="Search members..."
                  className="pl-10"
                  value={searchQuery}
                  onChange={(e) => setSearchQuery(e.target.value)}
                />
              </div>

              <Select value={filterSegment} onValueChange={setFilterSegment}>
                <SelectTrigger className="w-full md:w-[180px]">
                  <SelectValue placeholder="All Segments" />
                </SelectTrigger>
                <SelectContent className="bg-popover z-50">
                  <SelectItem value="all">All Segments</SelectItem>
                  <SelectItem value="Developer">Developer</SelectItem>
                  <SelectItem value="Associate">Associate</SelectItem>
                  <SelectItem value="Institutional">Institutional</SelectItem>
                </SelectContent>
              </Select>

              <Select value={filterRegion} onValueChange={setFilterRegion}>
                <SelectTrigger className="w-full md:w-[180px]">
                  <SelectValue placeholder="All Regions" />
                </SelectTrigger>
                <SelectContent className="bg-popover z-50">
                  <SelectItem value="all">All Regions</SelectItem>
                  <SelectItem value="Tashkent">Tashkent</SelectItem>
                  <SelectItem value="Samarkand">Samarkand</SelectItem>
                  <SelectItem value="Bukhara">Bukhara</SelectItem>
                  <SelectItem value="Fergana">Fergana</SelectItem>
                </SelectContent>
              </Select>
            </div>

            <div className="flex items-center gap-2 mt-4 text-sm text-muted-foreground">
              <span>Showing {filteredMembers.length} of {members.length} members</span>
            </div>
          </div>
        </section>

        {/* Member Cards */}
        <section className="py-12">
          <div className="container mx-auto px-4 sm:px-6 lg:px-8">
            <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
              {filteredMembers.map((member) => (
                <Card key={member.id} className="p-6 card-elevated bg-card border-0 flex flex-col">
                  <div className="flex items-start justify-between mb-4">
                    <div className="flex h-14 w-14 items-center justify-center rounded-xl bg-primary/10">
                      <span className="text-xl font-bold text-primary">
                        {member.name.charAt(0)}
                      </span>
                    </div>
                    {member.verified && (
                      <Badge className="verified-badge">
                        <ShieldCheck className="h-3 w-3" />
                        Verified
                      </Badge>
                    )}
                  </div>

                  <h3 className="text-xl font-semibold text-foreground mb-2">{member.name}</h3>
                  
                  <p className="text-sm text-muted-foreground mb-4 flex-grow">
                    {member.description}
                  </p>

                  <div className="space-y-2 mb-4 pb-4 border-b">
                    <div className="flex items-center gap-2 text-sm">
                      <Building2 className="h-4 w-4 text-muted-foreground" />
                      <span className="text-muted-foreground">{member.segment}</span>
                      <span className="text-muted-foreground">•</span>
                      <span className="text-muted-foreground">{member.size}</span>
                    </div>
                    <div className="flex items-center gap-2 text-sm">
                      <MapPin className="h-4 w-4 text-muted-foreground" />
                      <span className="text-muted-foreground">{member.region}</span>
                    </div>
                    {member.projects > 0 && (
                      <div className="text-sm font-medium text-foreground">
                        {member.projects} active projects
                      </div>
                    )}
                  </div>

                  <Button variant="outline" className="w-full mt-auto">
                    View Profile
                    <ExternalLink className="ml-2 h-4 w-4" />
                  </Button>
                </Card>
              ))}
            </div>

            {filteredMembers.length === 0 && (
              <div className="text-center py-12">
                <p className="text-lg text-muted-foreground">
                  No members found matching your criteria.
                </p>
              </div>
            )}
          </div>
        </section>
      </main>
      <Footer />
    </div>
  );
};

export default Members;
