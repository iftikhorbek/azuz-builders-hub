import { Header } from '@/components/layout/Header';
import { Footer } from '@/components/layout/Footer';
import { Hero } from '@/components/home/Hero';
import { WhatWeDo } from '@/components/home/WhatWeDo';
import { Updates } from '@/components/home/Updates';
import { MemberMarquee } from '@/components/home/MemberMarquee';
import { Impact } from '@/components/home/Impact';

const Index = () => {
  return (
    <div className="min-h-screen flex flex-col">
      <Header />
      <main className="flex-1">
        <Hero />
        <WhatWeDo />
        <Updates />
        <MemberMarquee />
        <Impact />
      </main>
      <Footer />
    </div>
  );
};

export default Index;
