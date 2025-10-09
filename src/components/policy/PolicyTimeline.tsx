import { Badge } from '@/components/ui/badge';
import { Card } from '@/components/ui/card';
import { Button } from '@/components/ui/button';
import { FileText, Download, Calendar } from 'lucide-react';

interface PolicyItem {
  id: number;
  title: string;
  status: 'draft' | 'consultation' | 'adopted';
  date: string;
  description: string;
  impact: string;
  downloadUrl?: string;
}

interface PolicyTimelineProps {
  policies: PolicyItem[];
}

export const PolicyTimeline = ({ policies }: PolicyTimelineProps) => {
  const getStatusClass = (status: string) => {
    const classes = {
      draft: 'status-draft',
      consultation: 'status-consultation',
      adopted: 'status-adopted',
    };
    return classes[status as keyof typeof classes] || '';
  };

  const getStatusLabel = (status: string) => {
    const labels = {
      draft: 'Draft',
      consultation: 'Public Consultation',
      adopted: 'Adopted',
    };
    return labels[status as keyof typeof labels] || status;
  };

  return (
    <div className="relative">
      {/* Timeline Line */}
      <div className="absolute left-6 top-0 bottom-0 w-0.5 bg-border hidden md:block"></div>

      {/* Policy Items */}
      <div className="space-y-8">
        {policies.map((policy, index) => (
          <div key={policy.id} className="relative flex gap-6">
            {/* Timeline Dot */}
            <div className="hidden md:flex flex-shrink-0 h-12 w-12 items-center justify-center rounded-full bg-primary text-primary-foreground font-bold shadow-md z-10">
              <FileText className="h-5 w-5" />
            </div>

            {/* Policy Card */}
            <Card className="flex-1 p-6 card-elevated bg-card">
              <div className="flex flex-col md:flex-row md:items-start md:justify-between gap-4 mb-4">
                <div className="flex-1">
                  <div className="flex items-center gap-3 mb-2">
                    <Badge className={`${getStatusClass(policy.status)} text-xs px-2 py-1 rounded-full`}>
                      {getStatusLabel(policy.status)}
                    </Badge>
                    <div className="flex items-center gap-1 text-xs text-muted-foreground">
                      <Calendar className="h-3 w-3" />
                      {new Date(policy.date).toLocaleDateString('en-US', {
                        month: 'short',
                        day: 'numeric',
                        year: 'numeric',
                      })}
                    </div>
                  </div>
                  <h3 className="text-lg font-semibold text-foreground mb-2">{policy.title}</h3>
                  <p className="text-sm text-muted-foreground mb-3">{policy.description}</p>
                  <div className="inline-flex items-start gap-2 px-3 py-2 rounded-lg bg-accent/10">
                    <span className="text-xs font-medium text-accent-foreground">Impact:</span>
                    <span className="text-xs text-muted-foreground">{policy.impact}</span>
                  </div>
                </div>

                {policy.downloadUrl && (
                  <Button variant="outline" size="sm">
                    <Download className="h-4 w-4 mr-2" />
                    Download
                  </Button>
                )}
              </div>

              {policy.status === 'consultation' && (
                <div className="pt-4 border-t">
                  <Button variant="cta" size="sm">
                    Submit Feedback
                  </Button>
                </div>
              )}
            </Card>
          </div>
        ))}
      </div>
    </div>
  );
};
