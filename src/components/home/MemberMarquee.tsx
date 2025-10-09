import { ShieldCheck } from 'lucide-react';

export const MemberMarquee = () => {
  // Placeholder member names - in production these would be logos
  const members = [
    'TashkentStroy',
    'UzbekConstruct',
    'Capital Developers',
    'Modern Building Co',
    'Green Urban',
    'SmartCity Group',
    'Construction Plus',
    'Sigma Development',
  ];

  return (
    <section className="py-12 border-y bg-muted/20">
      <div className="container mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-8">
          <div className="inline-flex items-center gap-2 text-sm font-medium text-muted-foreground">
            <ShieldCheck className="h-4 w-4 text-success" />
            Verified Member Organizations
          </div>
        </div>

        <div className="relative overflow-hidden">
          <div className="flex animate-marquee">
            {[...members, ...members].map((member, index) => (
              <div
                key={index}
                className="flex-shrink-0 mx-8 flex items-center justify-center"
              >
                <div className="flex items-center gap-2 px-6 py-3 rounded-lg bg-card border">
                  <div className="h-8 w-8 rounded bg-primary/10 flex items-center justify-center">
                    <span className="text-xs font-bold text-primary">
                      {member.charAt(0)}
                    </span>
                  </div>
                  <span className="text-sm font-medium text-foreground whitespace-nowrap">
                    {member}
                  </span>
                  <ShieldCheck className="h-3 w-3 text-success ml-1" />
                </div>
              </div>
            ))}
          </div>
        </div>
      </div>

      <style>{`
        @keyframes marquee {
          0% {
            transform: translateX(0);
          }
          100% {
            transform: translateX(-50%);
          }
        }
        .animate-marquee {
          animation: marquee 30s linear infinite;
        }
      `}</style>
    </section>
  );
};
