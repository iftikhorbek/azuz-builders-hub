import { Header } from '@/components/layout/Header';
import { Footer } from '@/components/layout/Footer';
import { PageBreadcrumb } from '@/components/common/PageBreadcrumb';
import { Card } from '@/components/ui/card';
import { Button } from '@/components/ui/button';
import { Badge } from '@/components/ui/badge';
import { FileText, Download, ExternalLink, Calendar, Newspaper } from 'lucide-react';

const Resources = () => {
  const pressReleases = [
    {
      id: 1,
      title: 'AZUZ Welcomes Three New Member Organizations',
      date: '2025-10-01',
      excerpt: 'Leading developers join association to advance industry standards and innovation initiatives.',
      type: 'Press Release',
    },
    {
      id: 2,
      title: 'New Energy Efficiency Standards Enter Consultation Phase',
      date: '2025-10-05',
      excerpt: 'Public feedback period opens for updated residential building energy requirements.',
      type: 'Press Release',
    },
    {
      id: 3,
      title: 'Annual Construction Innovation Forum Announced',
      date: '2025-09-20',
      excerpt: '200+ industry leaders to gather for discussions on BIM adoption and digital transformation.',
      type: 'Press Release',
    },
  ];

  const documents = [
    {
      id: 1,
      title: 'Construction Market Report Q3 2025',
      category: 'Research',
      date: '2025-09-30',
      fileType: 'PDF',
      size: '2.4 MB',
    },
    {
      id: 2,
      title: 'BIM Implementation Guide for Developers',
      category: 'Standards',
      date: '2025-09-15',
      fileType: 'PDF',
      size: '5.1 MB',
    },
    {
      id: 3,
      title: 'Safety Protocol Handbook 2025',
      category: 'Safety',
      date: '2025-08-20',
      fileType: 'PDF',
      size: '3.8 MB',
    },
    {
      id: 4,
      title: 'Sustainable Materials Procurement Guide',
      category: 'Guidelines',
      date: '2025-07-10',
      fileType: 'PDF',
      size: '1.9 MB',
    },
  ];

  const mediaCoverage = [
    {
      id: 1,
      outlet: 'Uzbekistan Today',
      title: 'Construction Association Drives Industry Modernization',
      date: '2025-09-25',
      link: '#',
    },
    {
      id: 2,
      outlet: 'Business Tashkent',
      title: 'BIM Adoption Accelerates in Uzbek Construction Sector',
      date: '2025-09-18',
      link: '#',
    },
    {
      id: 3,
      outlet: 'Central Asia Development News',
      title: 'AZUZ Members Lead in Sustainable Building Practices',
      date: '2025-08-30',
      link: '#',
    },
  ];

  return (
    <div className="min-h-screen flex flex-col">
      <Header />
      <main className="flex-1">
        {/* Hero */}
        <section className="pattern-bg py-16 md:py-24 border-b">
          <div className="container mx-auto px-4 sm:px-6 lg:px-8">
            <PageBreadcrumb items={[{ label: 'Resources & Newsroom' }]} />
            
            <div className="max-w-3xl">
              <h1 className="text-4xl md:text-5xl font-bold text-foreground mb-6">
                Resources & Newsroom
              </h1>
              <p className="text-xl text-muted-foreground leading-relaxed">
                Access research, market data, press releases, and media coverage about AZUZ and the construction industry.
              </p>
            </div>
          </div>
        </section>

        {/* Press Releases */}
        <section className="py-16">
          <div className="container mx-auto px-4 sm:px-6 lg:px-8">
            <div className="flex items-center justify-between mb-8">
              <div>
                <h2 className="text-3xl font-bold text-foreground mb-2">Press Releases</h2>
                <p className="text-muted-foreground">Latest news and announcements from AZUZ</p>
              </div>
              <Button variant="outline" size="sm">
                <Newspaper className="h-4 w-4 mr-2" />
                Media Kit
              </Button>
            </div>

            <div className="space-y-4">
              {pressReleases.map((release) => (
                <Card key={release.id} className="p-6 card-elevated bg-card border-0">
                  <div className="flex flex-col md:flex-row md:items-start md:justify-between gap-4">
                    <div className="flex-1">
                      <div className="flex items-center gap-3 mb-2">
                        <Badge className="bg-primary/10 text-primary border-primary/30 border text-xs">
                          {release.type}
                        </Badge>
                        <span className="text-xs text-muted-foreground flex items-center gap-1">
                          <Calendar className="h-3 w-3" />
                          {new Date(release.date).toLocaleDateString('en-US', {
                            month: 'short',
                            day: 'numeric',
                            year: 'numeric',
                          })}
                        </span>
                      </div>
                      <h3 className="text-lg font-semibold text-foreground mb-2">{release.title}</h3>
                      <p className="text-sm text-muted-foreground">{release.excerpt}</p>
                    </div>
                    <Button variant="outline" size="sm" className="flex-shrink-0">
                      Read More
                      <ExternalLink className="ml-2 h-3 w-3" />
                    </Button>
                  </div>
                </Card>
              ))}
            </div>
          </div>
        </section>

        {/* Documents & Resources */}
        <section className="py-16 bg-muted/30">
          <div className="container mx-auto px-4 sm:px-6 lg:px-8">
            <div className="mb-8">
              <h2 className="text-3xl font-bold text-foreground mb-2">Documents & Resources</h2>
              <p className="text-muted-foreground">Research reports, standards, guidelines, and market data</p>
            </div>

            <div className="grid md:grid-cols-2 gap-6">
              {documents.map((doc) => (
                <Card key={doc.id} className="p-6 card-elevated bg-card border-0">
                  <div className="flex items-start gap-4">
                    <div className="flex-shrink-0 flex h-12 w-12 items-center justify-center rounded-xl bg-accent/10">
                      <FileText className="h-6 w-6 text-accent" />
                    </div>
                    <div className="flex-1 min-w-0">
                      <div className="flex items-center gap-2 mb-2">
                        <Badge className="bg-secondary text-secondary-foreground text-xs">
                          {doc.category}
                        </Badge>
                        <Badge variant="outline" className="text-xs">
                          {doc.fileType}
                        </Badge>
                      </div>
                      <h3 className="text-lg font-semibold text-foreground mb-1">{doc.title}</h3>
                      <div className="flex items-center gap-3 text-xs text-muted-foreground mb-3">
                        <span>{new Date(doc.date).toLocaleDateString('en-US', { month: 'short', year: 'numeric' })}</span>
                        <span>•</span>
                        <span>{doc.size}</span>
                      </div>
                      <Button variant="cta" size="sm">
                        <Download className="h-4 w-4 mr-2" />
                        Download
                      </Button>
                    </div>
                  </div>
                </Card>
              ))}
            </div>
          </div>
        </section>

        {/* Media Coverage */}
        <section className="py-16">
          <div className="container mx-auto px-4 sm:px-6 lg:px-8">
            <div className="mb-8">
              <h2 className="text-3xl font-bold text-foreground mb-2">Media Coverage</h2>
              <p className="text-muted-foreground">AZUZ and member organizations in the news</p>
            </div>

            <div className="grid md:grid-cols-3 gap-6">
              {mediaCoverage.map((item) => (
                <Card key={item.id} className="p-6 card-elevated bg-card border-0 flex flex-col">
                  <div className="text-sm font-medium text-primary mb-2">{item.outlet}</div>
                  <h3 className="text-lg font-semibold text-foreground mb-2 flex-grow">{item.title}</h3>
                  <div className="flex items-center justify-between pt-4 border-t">
                    <span className="text-xs text-muted-foreground">
                      {new Date(item.date).toLocaleDateString('en-US', {
                        month: 'short',
                        day: 'numeric',
                        year: 'numeric',
                      })}
                    </span>
                    <a
                      href={item.link}
                      className="text-sm font-medium text-primary hover:text-primary-hover inline-flex items-center gap-1"
                    >
                      Read article
                      <ExternalLink className="h-3 w-3" />
                    </a>
                  </div>
                </Card>
              ))}
            </div>
          </div>
        </section>

        {/* Media Contact */}
        <section className="py-12 bg-primary text-primary-foreground">
          <div className="container mx-auto px-4 sm:px-6 lg:px-8">
            <div className="max-w-3xl mx-auto text-center">
              <h2 className="text-2xl font-bold mb-4">Media Inquiries</h2>
              <p className="mb-6 opacity-90">
                For press inquiries, interview requests, or media partnerships, contact our communications team.
              </p>
              <div className="flex flex-col sm:flex-row gap-4 justify-center">
                <Button variant="outline" className="bg-transparent border-primary-foreground text-primary-foreground hover:bg-primary-foreground hover:text-primary">
                  press@azuz.uz
                </Button>
                <Button variant="outline" className="bg-transparent border-primary-foreground text-primary-foreground hover:bg-primary-foreground hover:text-primary">
                  +998 (71) 123-45-69
                </Button>
              </div>
            </div>
          </div>
        </section>
      </main>
      <Footer />
    </div>
  );
};

export default Resources;
