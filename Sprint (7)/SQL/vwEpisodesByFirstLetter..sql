USE DoctorWho

SELECT AuthorName, DoctorName, Title, EpisodeDate
FROM			tblAuthor INNER JOIN
                tblEpisode ON tblAuthor.AuthorId = tblEpisode.AuthorId INNER JOIN
                tblDoctor ON tblEpisode.DoctorId = tblDoctor.DoctorId

				WHERE Title LIKE 'h%';