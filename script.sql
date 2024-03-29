USE [member]
GO
/****** Object:  Table [dbo].[membertb]    Script Date: 2019/8/26 上午 05:02:59 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[membertb](
	[m_seq] [int] NOT NULL,
	[m_id] [int] NULL,
	[m_name] [varchar](50) NULL,
	[m_points] [int] NULL,
	[m_address] [varchar](50) NULL,
	[m_date] [date] NULL,
	[m_del] [int] NULL,
	[m_acc] [varchar](50) NULL,
 CONSTRAINT [PK_membertb] PRIMARY KEY CLUSTERED 
(
	[m_seq] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
INSERT [dbo].[membertb] ([m_seq], [m_id], [m_name], [m_points], [m_address], [m_date], [m_del], [m_acc]) VALUES (1, 1908001001, N'john', 100, N'Penh', CAST(N'2019-08-25' AS Date), 0, N'JJ')
INSERT [dbo].[membertb] ([m_seq], [m_id], [m_name], [m_points], [m_address], [m_date], [m_del], [m_acc]) VALUES (2, 1908002013, N'johnny', 10, N'Phnom', CAST(N'2019-08-25' AS Date), 0, N'JO')
INSERT [dbo].[membertb] ([m_seq], [m_id], [m_name], [m_points], [m_address], [m_date], [m_del], [m_acc]) VALUES (3, 1908003441, N'joey', 599, N'Taipei', CAST(N'2019-08-26' AS Date), 0, N'CC')
INSERT [dbo].[membertb] ([m_seq], [m_id], [m_name], [m_points], [m_address], [m_date], [m_del], [m_acc]) VALUES (4, 1908004726, N'joo', 200, N'NewYork', CAST(N'2019-08-26' AS Date), 0, N'ww')
INSERT [dbo].[membertb] ([m_seq], [m_id], [m_name], [m_points], [m_address], [m_date], [m_del], [m_acc]) VALUES (5, 1908005211, N'you', 7, N'CA', CAST(N'2019-08-26' AS Date), 0, N'Are')
INSERT [dbo].[membertb] ([m_seq], [m_id], [m_name], [m_points], [m_address], [m_date], [m_del], [m_acc]) VALUES (6, 1908006566, N'joe', 88, N'LA', CAST(N'2019-08-26' AS Date), 0, N'mem')
INSERT [dbo].[membertb] ([m_seq], [m_id], [m_name], [m_points], [m_address], [m_date], [m_del], [m_acc]) VALUES (7, 1908007437, N'johnny', 8, N'MN', CAST(N'2019-08-26' AS Date), 0, N'ac')
INSERT [dbo].[membertb] ([m_seq], [m_id], [m_name], [m_points], [m_address], [m_date], [m_del], [m_acc]) VALUES (8, 1908008407, N'johnson', 0, N'CA', CAST(N'2019-08-26' AS Date), 0, N'do')
INSERT [dbo].[membertb] ([m_seq], [m_id], [m_name], [m_points], [m_address], [m_date], [m_del], [m_acc]) VALUES (9, 1908009009, N'go', 100, N'PI', CAST(N'2019-08-26' AS Date), 0, N'to')
