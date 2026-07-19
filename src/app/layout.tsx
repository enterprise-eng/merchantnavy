import type { Metadata } from "next";
import { Space_Grotesk } from "next/font/google";
import "./globals.css";

// 🚀 Fixed: Removed "800" from the weights array since Space Grotesk maxes out at 700
const spaceGrotesk = Space_Grotesk({
  subsets: ["latin"],
  weight: ["400", "500", "600", "700"],
  variable: "--font-space",
  display: "swap",
});

export const metadata: Metadata = {
  title: "OceanExplorers — One Destination for Complete Marine Exploration",
  description:
    "Dive deep into marine learning with OceanExplorers. Practice quizzes, earn ocean badges, and explore the deep sea through a gamified submarine dashboard.",
  keywords: ["ocean", "marine learning", "quiz", "gamified education", "deep sea"],
  openGraph: {
    title: "OceanExplorers",
    description:
      "The #1 gamified marine learning platform. Dive deep, learn fast, surface smarter.",
    type: "website",
  },
};

export default function RootLayout({
  children,
}: Readonly<{ children: React.ReactNode }>) {
  return (
    <html lang="en" className={`${spaceGrotesk.variable} h-full antialiased`}>
      <body className="min-h-full flex flex-col bg-slate-950 text-slate-100">
        {children}
      </body>
    </html>
  );
}