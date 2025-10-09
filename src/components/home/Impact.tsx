import { TrendingUp, Users, Award, FileCheck } from 'lucide-react';

export const Impact = () => {
  const metrics = [
    {
      icon: FileCheck,
      value: '18',
      label: 'Policy Proposals',
      sublabel: 'Submitted to government agencies',
      color: 'text-primary',
      bgColor: 'bg-primary/10',
    },
    {
      icon: Users,
      value: '2,400+',
      label: 'Training Hours',
      sublabel: 'Professional development delivered',
      color: 'text-accent',
      bgColor: 'bg-accent/10',
    },
    {
      icon: Award,
      value: '12',
      label: 'Standards Adopted',
      sublabel: 'Quality and safety frameworks',
      color: 'text-success',
      bgColor: 'bg-success/10',
    },
    {
      icon: TrendingUp,
      value: '150+',
      label: 'Active Projects',
      sublabel: 'By member organizations',
      color: 'text-primary',
      bgColor: 'bg-primary/10',
    },
  ];

  return (
    <section className="py-16 md:py-24 bg-primary text-primary-foreground relative overflow-hidden">
      {/* Background Pattern */}
      <div className="absolute inset-0 opacity-5">
        <div className="absolute inset-0" style={{
          backgroundImage: `repeating-linear-gradient(
            45deg,
            transparent,
            transparent 20px,
            currentColor 20px,
            currentColor 40px
          )`
        }}></div>
      </div>

      <div className="container mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div className="text-center max-w-3xl mx-auto mb-12">
          <h2 className="text-3xl md:text-4xl font-bold mb-4">
            Our Impact
          </h2>
          <p className="text-lg opacity-90">
            Measurable progress toward modernizing Uzbekistan's construction industry
          </p>
        </div>

        <div className="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
          {metrics.map((metric) => (
            <div
              key={metric.label}
              className="bg-background/10 backdrop-blur-sm border border-primary-foreground/20 rounded-xl p-6 text-center hover:bg-background/20 transition-all duration-300"
            >
              <div className={`inline-flex h-12 w-12 items-center justify-center rounded-xl ${metric.bgColor} mb-4`}>
                <metric.icon className={`h-6 w-6 ${metric.color}`} />
              </div>
              <div className="text-3xl md:text-4xl font-bold mb-2">{metric.value}</div>
              <div className="text-sm font-semibold mb-1">{metric.label}</div>
              <div className="text-xs opacity-80">{metric.sublabel}</div>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};
