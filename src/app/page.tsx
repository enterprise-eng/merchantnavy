"use client";

import React, { useState } from "react";

export default function TestbookFullClone() {
  const [activeTab, setActiveTab] = useState("SSC Exams");

  const stats = [
    { value: "8.7+ Crore", label: "Registered Students", icon: "✓", bg: "bg-emerald-50", text: "text-emerald-600" },
    { value: "4+ Lacs", label: "Student Selections", icon: "🏆", bg: "bg-amber-50", text: "text-amber-500" },
    { value: "242+ Crore", label: "Tests Attempted", icon: "📄", bg: "bg-blue-50", text: "text-blue-600" },
    { value: "5.5+ Crore", label: "Classes Attended", icon: "⏰", bg: "bg-orange-50", text: "text-orange-500" },
  ];

  const examCategories = [
    "SSC Exams", "Banking Exams", "Teaching Exams", "Civil Services Exam",
    "Railways Exams", "Engineering Recruitment Exams", "Defence Exams",
    "State Govt. Exams", "Police Exams", "Insurance Exams"
  ];

  const mockExamsMap: Record<string, string[]> = {
    "SSC Exams": ["SSC CGL Mock Test Series 2026", "SSC CHSL Tier I & II Mocks", "SSC GD Constable Mock Test", "SSC MTS Sectional Pack", "SSC CPO Full Length Test", "Delhi Police Constable Mock"],
    "Banking Exams": ["IBPS PO Prelims Pack", "SBI Clerk Full Mock Test", "IBPS RRB Office Assistant Series", "SBI PO Advanced Mocks", "RBI Assistant Practice Set", "IBPS SO Professional Knowledge"],
    "Teaching Exams": ["CTET Paper 1 Mega Pack", "CTET Paper 2 (Social Science)", "DSSSB PGT Common Paper", "REET Level 1 Mock Test", "EMRS TGT General Paper", "WB TET Practice Series"],
    "Civil Services Exam": ["UPSC CSE Prelims GS Test", "UPSC CSAT Speed Tests", "UPPSC RO ARO Mock Series", "BPSC Combined Prelims Pack", "MPSC Rajyseva Integrated Mock", "OPSC OAS Foundation Tests"],
    "Railways Exams": ["RRB Group D Mega Pack 2026", "RRB NTPC Graduate Mocks", "RRB ALP CBT-1 Series", "RRB Technician Practice Mocks", "RPF SI Comprehensive Test", "RPF Constable Speed Drills"]
  };

  const activeExams = mockExamsMap[activeTab] || mockExamsMap["SSC Exams"];

  const superCourses = [
    { title: "SSC CGL 2026: Final Selection Live Batch", dynamic: "LIVE CLASS", classes: "325 Live Classes", author: "Testbook & Team" },
    { title: "Nirnay IAS 2027 - Prarambh Foundation Batch 6", dynamic: "FOUNDATION BATCH", classes: "550+ Hours Lectures", author: "Super Teachers" },
    { title: "RRB Group D 'Express' Complete Crash Course", dynamic: "CRASH COURSE", classes: "80 Live Classes", author: "Testbook Team" },
    { title: "UGC NET Paper 1 Super Access Program", dynamic: "DEC JRF 2026", classes: "120+ Topic Videos", author: "Expert Faculty" }
  ];

  const wallOfFame = [
    { name: "Samridhi Talwar", rank: "AIR 1", exam: "Delhi Judicial 2024" },
    { name: "Ashish Tiwari", rank: "AIR 2", exam: "SSC CGL 2024" },
    { name: "Debesh Bairagi", rank: "AIR 4", exam: "SSC CGL 2024" },
    { name: "Rohit Chadhar", rank: "AIR 1", exam: "SSC CHSL 2024" }
  ];

  return (
    <div className="w-full min-h-screen bg-[#f8fafc] text-[#1e293b] antialiased selection:bg-emerald-100 font-sans">

      {/* 1. APP PROMOTIONAL BANNER */}
      <div className="w-full bg-[#22c55e] text-white text-[13px] font-semibold py-2 px-4 flex justify-between items-center sticky top-0 z-50 shadow-sm">
        <div className="flex items-center gap-2 mx-auto md:mx-0">
          <span className="bg-black/20 text-[9px] uppercase tracking-wider px-1.5 py-0.5 rounded font-black">Live</span>
          <span>Access Live Classes, Mocks, PYP & Notes for 375+ Exams!</span>
        </div>
        <div className="hidden md:flex items-center gap-4">
          <button className="bg-blue-600 hover:bg-blue-700 text-white font-bold px-4 py-1.5 rounded text-xs transition-colors shadow-sm">
            Start ₹1 Trial
          </button>
          <span className="cursor-pointer font-bold opacity-80 hover:opacity-100 text-base">×</span>
        </div>
      </div>

      {/* 2. MAIN HEADER INTERFACE */}
      <header className="w-full bg-white border-b border-slate-200 sticky top-[37px] z-40 px-4 lg:px-8 py-3.5 flex items-center justify-between shadow-sm">
        <div className="flex items-center gap-8">
          <div className="flex items-center gap-1.5 cursor-pointer select-none">
            <div className="w-5 h-5 bg-blue-600 rounded-sm flex items-center justify-center text-white text-[10px] font-black">tb</div>
            <span className="text-xl font-black tracking-tight text-slate-900">
              testbook<span className="text-blue-600">.com</span>
            </span>
          </div>

          <nav className="hidden lg:flex items-center gap-6 text-[14px] font-bold text-slate-600">
            <span className="hover:text-blue-600 cursor-pointer transition-colors">Exams</span>
            <span className="text-amber-500 hover:text-amber-600 cursor-pointer transition-colors">SuperCoaching</span>
            <span className="text-emerald-600 hover:text-emerald-700 cursor-pointer transition-colors flex items-center gap-1">
              Live Classes <span className="text-[9px] bg-emerald-100 text-emerald-700 px-1 py-0.2 rounded font-extrabold">FREE</span>
            </span>
            <span className="hover:text-blue-600 cursor-pointer transition-colors">Test Series</span>
            <span className="hover:text-blue-600 cursor-pointer transition-colors">Pass</span>
          </nav>
        </div>

        <div className="flex items-center gap-4 w-full max-w-xs md:max-w-sm justify-end">
          <div className="relative w-full hidden md:block">
            <input
              type="text"
              placeholder="Search for your exam..."
              className="w-full bg-slate-50 border border-slate-200 text-xs rounded-lg py-2.5 pl-4 pr-10 outline-none focus:border-blue-500 focus:bg-white transition-all text-slate-700 placeholder:text-slate-400"
            />
            <span className="absolute right-3 top-2.5 text-slate-400 text-sm">🔍</span>
          </div>
          <button className="bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold px-5 py-2.5 rounded shadow-sm whitespace-nowrap transition-colors">
            Get Started
          </button>
        </div>
      </header>

      {/* 3. HERO FOLD SECTION */}
      <section className="w-full bg-gradient-to-r from-slate-50 to-blue-50/30 border-b border-slate-200 py-12 lg:py-20 px-4 lg:px-8">
        <div className="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

          <div className="lg:col-span-7 flex flex-col space-y-6 text-center lg:text-left">
            <h1 className="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight text-slate-900 leading-[1.15]">
              One Destination for <br /> Complete Exam Preparation
            </h1>

            <div className="flex flex-wrap justify-center lg:justify-start items-center gap-3 sm:gap-4 text-sm sm:text-base font-bold text-slate-700">
              <span className="bg-white border border-slate-200 px-3 py-1 rounded-full text-slate-800 shadow-sm">Learn</span>
              <span className="text-slate-300 font-light">▶</span>
              <span className="bg-white border border-slate-200 px-3 py-1 rounded-full text-slate-800 shadow-sm">Practice</span>
              <span className="text-slate-300 font-light">▶</span>
              <span className="bg-white border border-slate-200 px-3 py-1 rounded-full text-slate-800 shadow-sm">Improve</span>
              <span className="text-slate-300 font-light">▶</span>
              <span className="bg-white border border-slate-200 px-3 py-1 rounded-full text-slate-800 shadow-sm">Succeed</span>
            </div>

            <p className="text-sm sm:text-base text-slate-500 font-semibold">
              Start your preparation for selections. For Free!
            </p>

            <div className="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4 pt-2">
              <button className="w-full sm:w-auto bg-[#22c55e] hover:bg-[#1ebd54] text-white font-extrabold text-sm px-8 py-4 rounded-lg transition-all shadow-md shadow-emerald-200 tracking-wide">
                Get Started For Free
              </button>
              <div className="flex items-center gap-2">
                <div className="bg-slate-900 text-white px-3 py-1.5 rounded-lg flex items-center gap-2 text-[10px] cursor-pointer hover:bg-black transition-colors select-none">
                  <span className="text-lg">🤖</span><div>GET IT ON<div className="text-xs font-bold -mt-0.5">Google Play</div></div>
                </div>
                <div className="bg-slate-900 text-white px-3 py-1.5 rounded-lg flex items-center gap-2 text-[10px] cursor-pointer hover:bg-black transition-colors select-none">
                  <span className="text-lg">🍏</span><div>Download on the<div className="text-xs font-bold -mt-0.5">App Store</div></div>
                </div>
              </div>
            </div>
          </div>

          <div className="lg:col-span-5 flex justify-center items-center">
            <div className="w-full max-w-md bg-white rounded-2xl border border-slate-200 shadow-xl p-6 relative overflow-hidden flex flex-col justify-between aspect-[4/3]">
              <div className="flex justify-between items-center border-b border-slate-100 pb-4">
                <div className="flex gap-1.5">
                  <div className="w-3 h-3 bg-red-400 rounded-full"></div>
                  <div className="w-3 h-3 bg-amber-400 rounded-full"></div>
                  <div className="w-3 h-3 bg-emerald-400 rounded-full"></div>
                </div>
                <div className="h-6 w-20 bg-slate-100 rounded-md"></div>
              </div>
              <div className="w-full h-36 bg-slate-50 border border-dashed border-slate-200 rounded-xl flex flex-col items-center justify-center text-center p-4">
                <span className="text-3xl mb-2">📈</span>
                <span className="text-xs font-bold text-slate-400 uppercase tracking-wider">Interactive Performance Framework</span>
              </div>
              <div className="flex justify-between items-center pt-2">
                <div className="w-24 h-6 bg-blue-50 text-blue-600 text-[10px] font-bold rounded flex items-center justify-center">Mock Live Analysis</div>
                <div className="w-12 h-6 bg-slate-100 rounded"></div>
              </div>
            </div>
          </div>

        </div>
      </section>

      {/* 4. REAL METRICS STACK CONTAINER */}
      <section className="w-full max-w-7xl mx-auto px-4 lg:px-8 py-12">
        <div className="grid grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6">
          {stats.map((item, idx) => (
            <div key={idx} className="bg-white border border-slate-200 p-5 rounded-xl shadow-sm flex flex-col sm:flex-row items-center text-center sm:text-left gap-4 hover:shadow-md transition-shadow">
              <div className={`w-12 h-12 ${item.bg} ${item.text} flex items-center justify-center rounded-xl text-xl font-black shrink-0`}>
                {item.icon}
              </div>
              <div>
                <p className="text-xs font-bold text-slate-400 uppercase tracking-wider">{item.label}</p>
                <h3 className="text-xl sm:text-2xl font-black text-slate-900 mt-0.5">{item.value}</h3>
              </div>
            </div>
          ))}
        </div>
      </section>

      {/* 5. POPULAR EXAMS SELECTOR MATRIX */}
      <section className="w-full border-t border-slate-200 py-12 px-4 lg:px-8 bg-white">
        <div className="max-w-7xl mx-auto">
          <div className="text-center lg:text-left space-y-1 mb-8">
            <h2 className="text-2xl font-black text-slate-900">Popular Exams</h2>
            <p className="text-sm text-slate-500 font-medium">
              Get exam-ready with concepts, questions and study notes as per the latest pattern
            </p>
          </div>

          <div className="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            <div className="lg:col-span-4 flex flex-row lg:flex-col overflow-x-auto lg:overflow-x-visible border-b lg:border-b-0 lg:border-r border-slate-200 gap-1 pb-2 lg:pb-0 scrollbar-none">
              {examCategories.map((cat) => (
                <button
                  key={cat}
                  onClick={() => setActiveTab(cat)}
                  className={`whitespace-nowrap lg:whitespace-normal text-left px-4 py-3 rounded-l-none lg:rounded-l-xl border-b-2 lg:border-b-0 lg:border-l-4 font-bold text-sm transition-all ${activeTab === cat
                      ? "border-blue-600 bg-blue-50/60 text-blue-600"
                      : "border-transparent text-slate-600 hover:bg-slate-50"
                    }`}
                >
                  {cat}
                </button>
              ))}
            </div>

            <div className="lg:col-span-8 bg-[#f8fafc] border border-slate-200 rounded-xl p-6 shadow-sm">
              <div className="flex items-center justify-between border-b border-slate-200 pb-3 mb-4">
                <h4 className="font-extrabold text-slate-900 text-base">{activeTab} Ecosystem Dashboard</h4>
                <span className="text-xs text-blue-600 cursor-pointer font-bold hover:underline">Explore all exams →</span>
              </div>
              <div className="grid grid-cols-1 sm:grid-cols-2 gap-4">
                {activeExams.map((examName, idx) => (
                  <div key={idx} className="bg-white border border-slate-200 rounded-xl p-4 hover:border-blue-500 hover:shadow-sm transition-all flex items-center justify-between group cursor-pointer">
                    <div className="flex items-center gap-3">
                      <div className="w-8 h-8 bg-slate-50 rounded-lg flex items-center justify-center font-bold text-xs text-slate-400 border border-slate-100">✍</div>
                      <span className="text-sm font-bold text-slate-700 group-hover:text-blue-600 transition-colors">{examName}</span>
                    </div>
                    <span className="text-slate-300 group-hover:text-blue-500 transition-colors font-bold">➔</span>
                  </div>
                ))}
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* 6. SUPERCOACHING ECOSYSTEM GRID */}
      <section className="w-full border-t border-slate-200 py-16 px-4 lg:px-8 bg-slate-50/50">
        <div className="max-w-7xl mx-auto">
          <div className="flex flex-col md:flex-row md:items-end justify-between mb-8 gap-4 text-center md:text-left">
            <div>
              <h2 className="text-2xl font-black text-slate-900">Crack any government exam with India's Super Teachers</h2>
              <p className="text-sm text-slate-500 font-medium mt-1">Get comprehensive live courses, mock tests, and structured notes</p>
            </div>
            <button className="bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs px-5 py-2.5 rounded-lg shadow shrink-0 self-center md:self-end">
              Explore SuperCoaching
            </button>
          </div>

          <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            {superCourses.map((course, idx) => (
              <div key={idx} className="bg-white border border-slate-200 rounded-2xl overflow-hidden shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
                <div className="p-5 space-y-3">
                  <span className="bg-red-50 text-red-600 border border-red-100 text-[10px] font-bold px-2 py-0.5 rounded uppercase tracking-wider inline-block">
                    {course.dynamic}
                  </span>
                  <h3 className="font-extrabold text-slate-900 text-base line-clamp-2 hover:text-blue-600 cursor-pointer">
                    {course.title}
                  </h3>
                  <div className="text-xs font-semibold text-slate-400 flex items-center gap-1">
                    <span>🎬</span> {course.classes}
                  </div>
                </div>
                <div className="bg-slate-50 px-5 py-3 border-t border-slate-100 flex items-center justify-between">
                  <span className="text-xs text-slate-500 font-medium">By {course.author}</span>
                  <span className="text-blue-600 font-bold text-xs cursor-pointer hover:underline">View Pack</span>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* 7. WHY TESTBOOK & PERFORMANCE METRICS */}
      <section className="w-full border-t border-slate-200 py-16 px-4 lg:px-8 bg-white">
        <div className="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          <div className="space-y-6">
            <h2 className="text-3xl font-black text-slate-900 tracking-tight">Why Testbook?</h2>
            <p className="text-slate-500 text-sm sm:text-base font-medium leading-relaxed">
              With over 1.8+ Crore students actively learning and holding one of the absolute highest selection verification track records in India, you can fully count on our learning layouts to excel.
            </p>
            <div className="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
              <div className="flex gap-3 items-start">
                <div className="text-xl bg-blue-50 text-blue-600 p-2 rounded-lg font-bold">🎯</div>
                <div>
                  <h4 className="font-extrabold text-slate-900 text-sm">Detailed Score Analysis</h4>
                  <p className="text-xs text-slate-400 mt-0.5">Pinpoint exact performance tracking patterns</p>
                </div>
              </div>
              <div className="flex gap-3 items-start">
                <div className="text-xl bg-emerald-50 text-emerald-600 p-2 rounded-lg font-bold">⚡</div>
                <div>
                  <h4 className="font-extrabold text-slate-900 text-sm">Real Exam Environments</h4>
                  <p className="text-xs text-slate-400 mt-0.5">Live timed interfaces matching authentic frameworks</p>
                </div>
              </div>
            </div>
          </div>
          <div className="bg-slate-50 border border-slate-200 rounded-2xl p-6 sm:p-8 grid grid-cols-2 gap-6 shadow-inner">
            <div className="bg-white p-4 rounded-xl border border-slate-100 shadow-sm text-center">
              <h3 className="text-2xl font-black text-slate-900">19,054</h3>
              <p className="text-xs font-bold text-slate-400 uppercase tracking-wider mt-1">SSC Selections</p>
            </div>
            <div className="bg-white p-4 rounded-xl border border-slate-100 shadow-sm text-center">
              <h3 className="text-2xl font-black text-slate-900">18,921</h3>
              <p className="text-xs font-bold text-slate-400 uppercase tracking-wider mt-1">Banking Selections</p>
            </div>
            <div className="bg-white p-4 rounded-xl border border-slate-100 shadow-sm text-center">
              <h3 className="text-2xl font-black text-slate-900">7,087</h3>
              <p className="text-xs font-bold text-slate-400 uppercase tracking-wider mt-1">Railways Selections</p>
            </div>
            <div className="bg-white p-4 rounded-xl border border-slate-100 shadow-sm text-center">
              <h3 className="text-2xl font-black text-slate-900">8,505</h3>
              <p className="text-xs font-bold text-slate-400 uppercase tracking-wider mt-1">Other Exam Wins</p>
            </div>
          </div>
        </div>
      </section>

      {/* 8. VERIFIED SELECTION WALL OF FAME */}
      <section className="w-full border-t border-slate-200 py-16 px-4 lg:px-8 bg-slate-50/30">
        <div className="max-w-7xl mx-auto text-center space-y-8">
          <div className="space-y-1">
            <h2 className="text-2xl font-black text-slate-900">Testbook Wall of Fame</h2>
            <p className="text-sm text-slate-500 font-medium">Proud to have partnered with lakhs of students in securing their dream careers</p>
          </div>
          <div className="grid grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6">
            {wallOfFame.map((student, idx) => (
              <div key={idx} className="bg-white border border-slate-200 p-5 rounded-xl shadow-sm space-y-2 hover:shadow-md transition-all">
                <div className="w-16 h-16 bg-slate-100 rounded-full mx-auto flex items-center justify-center text-2xl border border-slate-200 shadow-inner">👤</div>
                <div>
                  <h4 className="font-extrabold text-slate-900 text-sm">{student.name}</h4>
                  <p className="text-blue-600 font-black text-xs mt-0.5">{student.rank}</p>
                  <p className="text-[11px] text-slate-400 font-medium mt-0.5">{student.exam}</p>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* 9. GLOBAL SYSTEM INDEX FOOTER */}
      <footer className="w-full bg-[#1e293b] text-slate-400 text-xs py-12 px-4 lg:px-8 border-t border-slate-800">
        <div className="max-w-7xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-8 border-b border-slate-800 pb-10">
          <div className="space-y-3">
            <h4 className="text-white font-bold tracking-wider uppercase text-[11px]">Company</h4>
            <ul className="space-y-2 font-medium">
              <li className="hover:text-white cursor-pointer transition-colors">About us</li>
              <li className="hover:text-white cursor-pointer transition-colors flex items-center gap-1">Careers <span className="bg-blue-600 text-white text-[8px] font-bold px-1 py-0.2 rounded">HIRING</span></li>
              <li className="hover:text-white cursor-pointer transition-colors">Teach Online</li>
              <li className="hover:text-white cursor-pointer transition-colors">Media Links</li>
            </ul>
          </div>
          <div className="space-y-3">
            <h4 className="text-white font-bold tracking-wider uppercase text-[11px]">Products</h4>
            <ul className="space-y-2 font-medium">
              <li className="hover:text-white cursor-pointer transition-colors">Test Series Catalog</li>
              <li className="hover:text-white cursor-pointer transition-colors">Testbook Pass Engine</li>
              <li className="hover:text-white cursor-pointer transition-colors">Online Videos</li>
              <li className="hover:text-white cursor-pointer transition-colors">Live Batches</li>
            </ul>
          </div>
          <div className="space-y-3">
            <h4 className="text-white font-bold tracking-wider uppercase text-[11px]">Resources</h4>
            <ul className="space-y-2 font-medium">
              <li className="hover:text-white cursor-pointer transition-colors">Exam Calendar</li>
              <li className="hover:text-white cursor-pointer transition-colors">GK & Current Affairs</li>
              <li className="hover:text-white cursor-pointer transition-colors">Doubts Portal</li>
              <li className="hover:text-white cursor-pointer transition-colors">Blogs & News</li>
            </ul>
          </div>
          <div className="space-y-3">
            <h4 className="text-white font-bold tracking-wider uppercase text-[11px]">Contact & Address</h4>
            <p className="leading-relaxed font-medium">
              Testbook Edu Solutions Pvt. Ltd.<br />
              D-1, Vyapar Marg, Noida Sector 3,<br />
              Uttar Pradesh, India - 201301
            </p>
            <p className="text-blue-400 font-bold hover:underline cursor-pointer">support@testbook.com</p>
          </div>
        </div>
        <div className="max-w-7xl mx-auto pt-6 flex flex-col sm:flex-row items-center justify-between gap-4 font-medium text-[11px]">
          <p>© 2014-2026 Testbook Edu Solutions Pvt. Ltd.: All rights reserved</p>
          <div className="flex items-center gap-4">
            <span className="hover:text-white cursor-pointer transition-colors">User Policy</span>
            <span className="hover:text-white cursor-pointer transition-colors">Terms of Use</span>
            <span className="hover:text-white cursor-pointer transition-colors">Privacy Framework</span>
          </div>
        </div>
      </footer>

    </div>
  );
}