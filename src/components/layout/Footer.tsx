import { Link } from 'react-router-dom';
import { Mail, Phone, MapPin, Linkedin, Facebook, Twitter } from 'lucide-react';

export const Footer = () => {
  const footerLinks = {
    organization: [
      { name: 'About AZUZ', href: '/about' },
      { name: 'Governance', href: '/about#governance' },
      { name: 'Membership', href: '/membership' },
      { name: 'Partners', href: '/members' },
    ],
    resources: [
      { name: 'Policy & Standards', href: '/policy' },
      { name: 'Training & Events', href: '/events' },
      { name: 'Best Practices', href: '/projects' },
      { name: 'Newsroom', href: '/resources' },
    ],
    legal: [
      { name: 'Charter', href: '#' },
      { name: 'Privacy Policy', href: '#' },
      { name: 'Terms of Service', href: '#' },
      { name: 'Brand Assets', href: '#' },
    ],
  };

  return (
    <footer className="border-t bg-muted/30 mt-auto">
      <div className="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8">
          {/* Brand Section */}
          <div className="lg:col-span-2">
            <div className="flex items-center space-x-3 mb-4">
              <div className="flex h-10 w-10 items-center justify-center rounded-lg bg-primary">
                <span className="text-xl font-bold text-primary-foreground">A</span>
              </div>
              <div>
                <div className="text-lg font-bold text-foreground">AZUZ</div>
                <div className="text-xs text-muted-foreground">Association of Developers</div>
              </div>
            </div>
            <p className="text-sm text-muted-foreground mb-6 max-w-sm">
              Uniting Uzbekistan's developers to raise standards, accelerate innovation, and build better cities.
            </p>
            
            {/* Contact Info */}
            <div className="space-y-2 text-sm">
              <div className="flex items-start gap-2 text-muted-foreground">
                <MapPin className="h-4 w-4 mt-0.5 flex-shrink-0" />
                <span>BC Sigma, 71 Nukus Street<br />Tashkent, Uzbekistan</span>
              </div>
              <div className="flex items-center gap-2 text-muted-foreground">
                <Phone className="h-4 w-4 flex-shrink-0" />
                <span>+998 (71) 123-45-67</span>
              </div>
              <div className="flex items-center gap-2 text-muted-foreground">
                <Mail className="h-4 w-4 flex-shrink-0" />
                <a href="mailto:info@azuz.uz" className="hover:text-primary transition-colors">
                  info@azuz.uz
                </a>
              </div>
            </div>

            {/* Social Links */}
            <div className="flex items-center gap-3 mt-6">
              <a
                href="#"
                className="flex h-9 w-9 items-center justify-center rounded-md border hover:bg-accent transition-colors"
                aria-label="LinkedIn"
              >
                <Linkedin className="h-4 w-4" />
              </a>
              <a
                href="#"
                className="flex h-9 w-9 items-center justify-center rounded-md border hover:bg-accent transition-colors"
                aria-label="Facebook"
              >
                <Facebook className="h-4 w-4" />
              </a>
              <a
                href="#"
                className="flex h-9 w-9 items-center justify-center rounded-md border hover:bg-accent transition-colors"
                aria-label="Twitter"
              >
                <Twitter className="h-4 w-4" />
              </a>
            </div>
          </div>

          {/* Organization Links */}
          <div>
            <h3 className="font-semibold text-sm text-foreground mb-4">Organization</h3>
            <ul className="space-y-3">
              {footerLinks.organization.map((link) => (
                <li key={link.name}>
                  <Link
                    to={link.href}
                    className="text-sm text-muted-foreground hover:text-primary transition-colors"
                  >
                    {link.name}
                  </Link>
                </li>
              ))}
            </ul>
          </div>

          {/* Resources Links */}
          <div>
            <h3 className="font-semibold text-sm text-foreground mb-4">Resources</h3>
            <ul className="space-y-3">
              {footerLinks.resources.map((link) => (
                <li key={link.name}>
                  <Link
                    to={link.href}
                    className="text-sm text-muted-foreground hover:text-primary transition-colors"
                  >
                    {link.name}
                  </Link>
                </li>
              ))}
            </ul>
          </div>

          {/* Legal Links */}
          <div>
            <h3 className="font-semibold text-sm text-foreground mb-4">Legal</h3>
            <ul className="space-y-3">
              {footerLinks.legal.map((link) => (
                <li key={link.name}>
                  <a
                    href={link.href}
                    className="text-sm text-muted-foreground hover:text-primary transition-colors"
                  >
                    {link.name}
                  </a>
                </li>
              ))}
            </ul>
          </div>
        </div>

        {/* Bottom Bar */}
        <div className="mt-12 pt-8 border-t">
          <div className="flex flex-col md:flex-row justify-between items-center gap-4">
            <p className="text-sm text-muted-foreground">
              © {new Date().getFullYear()} AZUZ. All rights reserved. Non-profit organization, founded 2020.
            </p>
            <div className="flex items-center gap-1 text-xs text-muted-foreground">
              <span className="inline-flex h-2 w-2 rounded-full bg-success mr-1"></span>
              <span>System Status: Operational</span>
            </div>
          </div>
        </div>
      </div>
    </footer>
  );
};
